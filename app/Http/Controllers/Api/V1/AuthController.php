<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Helpers\ApiResponse;
use Throwable;

class AuthController extends Controller
{
    /**
     * Sign up a new user
     *
     * This endpoint allows users to register by providing a name, email, and password.
     * 
     * @group Authentication
     * @bodyParam name string required The name of the user. Example: John Doe
     * @bodyParam email string required The user's email address. Example: john@example.com
     * @bodyParam password string required The user's password (8-10 characters). Example: secret123
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Sign Up Successfully",
     *   "data": null
     * }
     *
     * @response 500 {
     *   "status": false,
     *   "message": "Something Went Wrong"
     * }
     */
    public function sign_up(Request $request)
    {
        try {
            // Validate user input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|max:10',
            ]);

            // Create a new user with hashed password
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            // Check if user creation failed
            if (!$user) {
                return ApiResponse::error(500, "Something Went Wrong");
            }

            // Return success response
            return ApiResponse::success(200, 'Sign Up Successfully');
        } catch (Throwable $e) {
            // Catch any errors and return them
            return ApiResponse::error(500, "Something Went Wrong " . $e->getMessage());
        }
    }

    /**
 * User Login
 *
 * This endpoint allows users to log in using their email and password.
 * A valid Sanctum token will be returned upon successful login.
 * 
 * @group Authentication
 * @bodyParam email string required The email of the user. Example: user@example.com
 * @bodyParam password string required The password (8-10 characters). Example: secret123
 *
 * @response 200 {
 *   "status": true,
 *   "message": "Login Successfully",
 *   "data": {
 *     "id": 1,
 *     "name": "John Doe",
 *     "email": "user@example.com",
 *     "apitoken": "1|xyz123abc..."
 *   }
 * }
 *
 * @response 402 {
 *   "status": false,
 *   "message": "Invalid Credentials"
 * }
 *
 * @response 500 {
 *   "status": false,
 *   "message": "Something Went Wrong ..."
 * }
 */
public function sign_in(Request $request)
{
    try {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:10',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return ApiResponse::error(402, 'User not found');
        }

        if (!Hash::check($request->input('password'), $user->password)) {
            return ApiResponse::error(402, 'Invalid Credentials');
        }

        $token = $user->createToken('auth-token')->plainTextToken;
        $user['apitoken'] = $token;

        return ApiResponse::success(200, 'Login Successfully', $user);
    } catch (Throwable $e) {
        return ApiResponse::error(500, "Something Went Wrong " . $e->getMessage());
    }
}

}
