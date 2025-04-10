<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Throwable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Get all products.
     *
     * @group Products
     * @responseFile storage/responses/products.index.json
     * @return \Illuminate\Http\JsonResponse
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function getAllProducts()
    {
        try {

            $products = Cache::remember('all_products', now()->addMinutes(60), function () {
                return Product::all();
            });
            if (!$products) {
                return ApiResponse::error('401', "Product Not Found");
            }

            return ApiResponse::success(200, 'Product fetched successfully', $products);
        } catch (Throwable $e) {
            return ApiResponse::error(500, 'Something went wrong: ' . $e->getMessage());
        }
    }

    /**
     * Get a single product by ID.
     *
     * @group Products
     * @urlParam id required The ID of the product. Example: 1
     * @return \Illuminate\Http\JsonResponse
     * @authenticated
     * @header Authorization Bearer {token}

     */
    public function show($id)
    {
        try {
            $product = Product::findOrFail($id);
            return ApiResponse::success(200, 'Product fetched successfully', $product);
        } catch (Throwable $e) {
            return ApiResponse::error(500, 'Something went wrong: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created product.
     *
     * @group Products
     * @bodyParam product_name string required The name of the product.
     * @bodyParam price float required The price of the product.
     * @bodyParam productheading string required Short heading or tagline.
     * @bodyParam color_id integer required Color ID reference.
     * @bodyParam size_id integer required Size ID reference.
     * @bodyParam size_name string required Size name.
     * @bodyParam sku string required SKU code.
     * @bodyParam jewellery_care string required Care instructions.
     * @bodyParam shipping_info string required Shipping description.
     * @bodyParam length string required Product length.
     * @bodyParam breadth string required Product breadth.
     * @bodyParam height string required Product height.
     * @bodyParam weight string required Product weight.
     * @bodyParam stock integer required Available stock.
     * @bodyParam images file[] required Product images.
     * @return \Illuminate\Http\JsonResponse
     * @authenticated
     * @header Authorization Bearer {token}

     */
    public function newProduct(Request $request)
    {
        try {
            $request->validate([
                'product_name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'productheading' => 'required|string',
                'color_id' => 'required|integer',
                'size_id' => 'required|integer',
                'size_name' => 'required|string',
                'sku' => 'required|string',
                'jewellery_care' => 'required|string',
                'shipping_info' => 'required|string',
                'length' => 'required|string',
                'breadth' => 'required|string',
                'height' => 'required|string',
                'weight' => 'required|string',
                'stock' => 'required|integer',
                'images.*' => 'image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $imagePaths = [];
            if (!$request->hasFile('images')) {
                return ApiResponse::error(403, "Images not available");
            }

            $images = $request->file("images");
            foreach ($images as $image) {
                $extension = $image->getClientOriginalExtension();
                $filename = 'image_' . uniqid() . '.' . $extension;
                $path = $image->storeAs('products', $filename, 'public');
                $imagePaths[] = $path;
            }

            $data = [
                'code'            => 'P_4',
                'category_name'   => 'Immunity-Wellness',
                'subcategory_id'  => $request->input('subcategory_id'),
                'subcategory_name' => 'Shop By Category',
                'product_name'    => $request->input('product_name'),
                'slug'            => Str::slug($request->input('product_name')),
                'productheading'  => $request->input('productheading'),
                'price'           => $request->input('price'),
                'dis_percentage'  => 20,
                'dis_price'       => $request->input('price') - ($request->input('price') * 0.2),
                'product_detail'  => strip_tags($request->input('shipping_info')),
                'description'     => $request->input('shipping_info'),
                'availability'    => '?',
                'availability_id' => '?',
                'date'            => now()->format('M d, Y'),
                'time'            => now()->format('h:i a'),
                'color'           => $request->input('color'),
                'color_id'        => $request->input('color_id'),
                'color_name'      => $request->input('color_name'),
                'size_id'         => $request->input('size_id'),
                'size_name'       => $request->input('size_name'),
                'sku'             => $request->input('sku'),
                'jewellery_care'  => $request->input('jewellery_care'),
                'shipping_info'   => $request->input('shipping_info'),
                'length'          => $request->input('length'),
                'breadth'         => $request->input('breadth'),
                'height'          => $request->input('height'),
                'weight'          => $request->input('weight'),
                'stock'           => $request->input('stock'),
                'status'          => 'Active',
                'images'          => implode(',', $imagePaths)
            ];

            $product = Product::create($data);

            if (!$product) {
                return ApiResponse::error(500, "Something went wrong");
            }

            return ApiResponse::success(200, 'New product added successfully', $product);
        } catch (Throwable $e) {
            return ApiResponse::error(500, "Something went wrong: " . $e->getMessage());
        }
    }

    /**
     * Update product by ID.
     *
     * @group Products
     * @urlParam id required Product ID to update.
     * @bodyParam price float The updated price.
     * @bodyParam product_name string The updated product name.
     * @bodyParam productheading string Updated heading.
     * @bodyParam images file[] Optional new product images.
     * @return \Illuminate\Http\JsonResponse
     * @authenticated
     * @header Authorization Bearer {token}

     */
    public function updateProduct(Request $request)
    {
        try {
            $id = $request->route('id');
            $product = Product::findOrFail($id);

            if ($request->has('product_name')) {
                $product->product_name = $request->input('product_name');
                $product->slug = Str::slug($request->input('product_name'));
            }

            if ($request->has('price')) {
                $price = $request->input('price');
                $product->price = $price;
                $product->dis_percentage = 20;
                $product->dis_price = $price - ($price * 0.2);
            }

            if ($request->has('productheading')) {
                $product->productheading = $request->input('productheading');
            }

            if ($request->has('subcategory_id')) {
                $product->subcategory_id = $request->input('subcategory_id');
            }

            if ($request->has('sku')) {
                $product->sku = $request->input('sku');
            }

            if ($request->has('jewellery_care')) {
                $product->jewellery_care = $request->input('jewellery_care');
            }

            if ($request->has('shipping_info')) {
                $product->shipping_info = $request->input('shipping_info');
                $product->product_detail = strip_tags($request->input('shipping_info'));
                $product->description = $request->input('shipping_info');
            }

            if ($request->has('length')) $product->length = $request->input('length');
            if ($request->has('breadth')) $product->breadth = $request->input('breadth');
            if ($request->has('height')) $product->height = $request->input('height');
            if ($request->has('weight')) $product->weight = $request->input('weight');
            if ($request->has('stock')) $product->stock = $request->input('stock');
            if ($request->has('color')) $product->color = $request->input('color');
            if ($request->has('color_id')) $product->color_id = $request->input('color_id');
            if ($request->has('color_name')) $product->color_name = $request->input('color_name');
            if ($request->has('size_id')) $product->size_id = $request->input('size_id');
            if ($request->has('size_name')) $product->size_name = $request->input('size_name');
            if ($request->has('status')) $product->status = $request->input('status');
            if ($request->has('availability')) $product->availability = $request->input('availability');
            if ($request->has('availability_id')) $product->availability_id = $request->input('availability_id');

            // Handle new images if provided
            if ($request->hasFile('images')) {
                $imagePaths = [];
                foreach ($request->file('images') as $image) {
                    $filename = 'image_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('products', $filename, 'public');
                    $imagePaths[] = $path;
                }
                $product->images = implode(',', $imagePaths);
            }

            if ($product->isDirty()) {
                $product->save();
                // Clear Redis cache for product listing
                Cache::forget('all_products');
                return ApiResponse::success(200, 'Product updated successfully', $product);
            } else {
                return ApiResponse::success(200, 'No changes made to product');
            }
        } catch (Throwable $e) {
            return ApiResponse::error(500, 'Something went wrong: ' . $e->getMessage());
        }
    }

    /**
     * Delete a product by ID.
     *
     * @group Products
     * @urlParam id required Product ID to delete.
     * @return \Illuminate\Http\JsonResponse
     *
     *
    
    
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     * @header Authorization Bearer {token}

     * @authenticated
     */
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete associated images if any
        if (!empty($product->images)) {
            $images = explode(',', $product->images);
            foreach ($images as $image) {
                $imagePath = 'products/' . ltrim($image, '/'); // Remove leading slash if exists
                Storage::disk('public')->delete($imagePath);
            }
        }

        // Delete the product from the database
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    /**
     * Delete all products.
     *
     * @group Products
     * @return \Illuminate\Http\JsonResponse
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function deleteAllProducts()
    {
        try {
            $products = Product::all();

            if (!$products->count()) {
                return ApiResponse::error(404, "No products to delete");
            }

            foreach ($products as $product) {
                $product->delete();
            }

            // Clear Redis cache for product listing
            Cache::forget('all_products');

            return ApiResponse::success(200, 'All products deleted successfully');
        } catch (Throwable $e) {
            return ApiResponse::error(500, 'Something went wrong: ' . $e->getMessage());
        }
    }

    // These methods are not implemented, so no docblocks needed yet
    public function index() {}
    public function create() {}
    public function store(Request $request) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
