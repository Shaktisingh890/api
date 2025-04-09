<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-products" class="tocify-header">
                <li class="tocify-item level-1" data-unique="products">
                    <a href="#products">Products</a>
                </li>
                                    <ul id="tocify-subheader-products" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="products-GETapi-v1-products-getProducts--id-">
                                <a href="#products-GETapi-v1-products-getProducts--id-">Get a single product by ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-GETapi-v1-products-getAllProducts">
                                <a href="#products-GETapi-v1-products-getAllProducts">Get all products.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-DELETEapi-v1-products-deleteProduct--id-">
                                <a href="#products-DELETEapi-v1-products-deleteProduct--id-">Delete a product by ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-DELETEapi-v1-products-deleteAllProducts">
                                <a href="#products-DELETEapi-v1-products-deleteAllProducts">Delete all products.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-POSTapi-v1-products-newProduct">
                                <a href="#products-POSTapi-v1-products-newProduct">Store a newly created product.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-PUTapi-v1-products-updateProduct--id-">
                                <a href="#products-PUTapi-v1-products-updateProduct--id-">Update product by ID.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 9, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="products">Products</h1>

    

                                <h2 id="products-GETapi-v1-products-getProducts--id-">Get a single product by ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products-getProducts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products/getProducts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/getProducts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products-getProducts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: 200,
    &quot;message&quot;: &quot;Product fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;code&quot;: &quot;P_1&quot;,
        &quot;category_name&quot;: &quot;Liver-Care&quot;,
        &quot;category_id&quot;: &quot;3&quot;,
        &quot;subcategory_name&quot;: null,
        &quot;subcategory_id&quot;: &quot;Select Subcategory&quot;,
        &quot;product_name&quot;: &quot;EN Liver&quot;,
        &quot;slug&quot;: &quot;EN-Liver&quot;,
        &quot;productheading&quot;: &quot;EN Liver &acirc;&euro;&ldquo; Keeps your liver healthy &amp; prevents various liver diseases&quot;,
        &quot;price&quot;: 599,
        &quot;dis_percentage&quot;: &quot;&quot;,
        &quot;dis_price&quot;: 199,
        &quot;product_detail&quot;: &quot;Calcium rich bone health capsule makes your bones strong.\npreventing many bone problems.&quot;,
        &quot;description&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
        &quot;availability&quot;: null,
        &quot;availability_id&quot;: &quot;&quot;,
        &quot;image1&quot;: &quot;67bd682d2479esubproduct-1.jpg&quot;,
        &quot;image2&quot;: &quot;67c005318b81f1-1.jpg&quot;,
        &quot;image3&quot;: &quot;67c005318ba953-1.png&quot;,
        &quot;image4&quot;: &quot;67c005318bcb61-1.jpg&quot;,
        &quot;image5&quot;: &quot;67c005318be371-1 (1).jpg&quot;,
        &quot;image6&quot;: null,
        &quot;status&quot;: &quot;Active&quot;,
        &quot;date&quot;: &quot;Feb 27, 2025&quot;,
        &quot;time&quot;: &quot;06:24 am&quot;,
        &quot;color&quot;: 0,
        &quot;color_id&quot;: 0,
        &quot;color_name&quot;: &quot;&quot;,
        &quot;size_id&quot;: 1,
        &quot;size_name&quot;: &quot;S&quot;,
        &quot;sku&quot;: &quot;P-1&quot;,
        &quot;jewellery_care&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
        &quot;shipping_info&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
        &quot;length&quot;: &quot;12&quot;,
        &quot;breadth&quot;: &quot;12&quot;,
        &quot;height&quot;: &quot;12&quot;,
        &quot;weight&quot;: &quot;12&quot;,
        &quot;stock&quot;: 10,
        &quot;images&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products-getProducts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products-getProducts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products-getProducts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products-getProducts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products-getProducts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-products-getProducts--id-" data-method="GET"
      data-path="api/v1/products/getProducts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products-getProducts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products-getProducts--id-"
                    onclick="tryItOut('GETapi-v1-products-getProducts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products-getProducts--id-"
                    onclick="cancelTryOut('GETapi-v1-products-getProducts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products-getProducts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/getProducts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-products-getProducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-products-getProducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-products-getProducts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="products-GETapi-v1-products-getAllProducts">Get all products.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products-getAllProducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products/getAllProducts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/getAllProducts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products-getAllProducts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: 200,
    &quot;message&quot;: &quot;Product fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;code&quot;: &quot;P_1&quot;,
            &quot;category_name&quot;: &quot;Liver-Care&quot;,
            &quot;category_id&quot;: &quot;3&quot;,
            &quot;subcategory_name&quot;: null,
            &quot;subcategory_id&quot;: &quot;Select Subcategory&quot;,
            &quot;product_name&quot;: &quot;EN Liver&quot;,
            &quot;slug&quot;: &quot;EN-Liver&quot;,
            &quot;productheading&quot;: &quot;EN Liver &acirc;&euro;&ldquo; Keeps your liver healthy &amp; prevents various liver diseases&quot;,
            &quot;price&quot;: 599,
            &quot;dis_percentage&quot;: &quot;&quot;,
            &quot;dis_price&quot;: 199,
            &quot;product_detail&quot;: &quot;Calcium rich bone health capsule makes your bones strong.\npreventing many bone problems.&quot;,
            &quot;description&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
            &quot;availability&quot;: null,
            &quot;availability_id&quot;: &quot;&quot;,
            &quot;image1&quot;: &quot;67bd682d2479esubproduct-1.jpg&quot;,
            &quot;image2&quot;: &quot;67c005318b81f1-1.jpg&quot;,
            &quot;image3&quot;: &quot;67c005318ba953-1.png&quot;,
            &quot;image4&quot;: &quot;67c005318bcb61-1.jpg&quot;,
            &quot;image5&quot;: &quot;67c005318be371-1 (1).jpg&quot;,
            &quot;image6&quot;: null,
            &quot;status&quot;: &quot;Active&quot;,
            &quot;date&quot;: &quot;Feb 27, 2025&quot;,
            &quot;time&quot;: &quot;06:24 am&quot;,
            &quot;color&quot;: 0,
            &quot;color_id&quot;: 0,
            &quot;color_name&quot;: &quot;&quot;,
            &quot;size_id&quot;: 1,
            &quot;size_name&quot;: &quot;S&quot;,
            &quot;sku&quot;: &quot;P-1&quot;,
            &quot;jewellery_care&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
            &quot;shipping_info&quot;: &quot;Calcium rich bone health capsule makes your bones strong, preventing many bone problems&quot;,
            &quot;length&quot;: &quot;12&quot;,
            &quot;breadth&quot;: &quot;12&quot;,
            &quot;height&quot;: &quot;12&quot;,
            &quot;weight&quot;: &quot;12&quot;,
            &quot;stock&quot;: 10,
            &quot;images&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;code&quot;: &quot;P_2&quot;,
            &quot;category_name&quot;: &quot;Digestive-Care&quot;,
            &quot;category_id&quot;: &quot;1&quot;,
            &quot;subcategory_name&quot;: &quot;Shop By Category&quot;,
            &quot;subcategory_id&quot;: &quot;2&quot;,
            &quot;product_name&quot;: &quot;EN Pure Shilajit&quot;,
            &quot;slug&quot;: &quot;EN- Pure- Shilajit&quot;,
            &quot;productheading&quot;: &quot;At En-Health, quality means delivering premium natural health solutions designed to support effective and consistent outcomes for your well-being. Our extensive range of liquid extracts, tablets, and capsules is inspired by foundational naturopathic princ&quot;,
            &quot;price&quot;: 999,
            &quot;dis_percentage&quot;: &quot;&quot;,
            &quot;dis_price&quot;: 799,
            &quot;product_detail&quot;: &quot;Improve energy and stamina.Improve function of brain and memory.Reduce Inflammation and swelling.Boost Immune system.Protect cellular damage and slow down aging process.Improve the absorption of the nutrients.Support overall health and well being&quot;,
            &quot;description&quot;: &quot;&lt;p&gt;Improve energy and stamina.Improve function of brain and memory.Reduce Inflammation and swelling.Boost Immune system.Protect cellular damage and slow down aging process.Improve the absorption of the nutrients.Support overall health and well being&lt;/p&gt;\n&quot;,
            &quot;availability&quot;: null,
            &quot;availability_id&quot;: &quot;&quot;,
            &quot;image1&quot;: &quot;67bd685234826product-2.jpg&quot;,
            &quot;image2&quot;: &quot;67c2ea9d86e31shilajit2.jpg&quot;,
            &quot;image3&quot;: &quot;67c2ea9d8704dshilajit3.jpg&quot;,
            &quot;image4&quot;: &quot;67c2ea9d871d8shilajit3.jpg&quot;,
            &quot;image5&quot;: &quot;67c2ea9d8760cshilajit4.jpg&quot;,
            &quot;image6&quot;: null,
            &quot;status&quot;: &quot;Active&quot;,
            &quot;date&quot;: &quot;Mar 01, 2025&quot;,
            &quot;time&quot;: &quot;11:08 am&quot;,
            &quot;color&quot;: 0,
            &quot;color_id&quot;: 0,
            &quot;color_name&quot;: &quot;&quot;,
            &quot;size_id&quot;: 1,
            &quot;size_name&quot;: &quot;S,M&quot;,
            &quot;sku&quot;: &quot;gfffgf&quot;,
            &quot;jewellery_care&quot;: &quot;Improve energy and stamina.Improve function of brain and memory.Reduce Inflammation and swelling.Boost Immune system.Protect cellular damage and slow down aging process.Improve the absorption of the nutrients.Support overall health and well being&quot;,
            &quot;shipping_info&quot;: &quot;Improve energy and stamina.Improve function of brain and memory.Reduce Inflammation and swelling.Boost Immune system.Protect cellular damage and slow down aging process.Improve the absorption of the nutrients.Support overall health and well being&quot;,
            &quot;length&quot;: &quot;12&quot;,
            &quot;breadth&quot;: &quot;12&quot;,
            &quot;height&quot;: &quot;8&quot;,
            &quot;weight&quot;: &quot;0.4&quot;,
            &quot;stock&quot;: 3,
            &quot;images&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products-getAllProducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products-getAllProducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products-getAllProducts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products-getAllProducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products-getAllProducts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-products-getAllProducts" data-method="GET"
      data-path="api/v1/products/getAllProducts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products-getAllProducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products-getAllProducts"
                    onclick="tryItOut('GETapi-v1-products-getAllProducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products-getAllProducts"
                    onclick="cancelTryOut('GETapi-v1-products-getAllProducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products-getAllProducts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/getAllProducts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-products-getAllProducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-products-getAllProducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="products-DELETEapi-v1-products-deleteProduct--id-">Delete a product by ID.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-products-deleteProduct--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/products/deleteProduct/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/deleteProduct/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-products-deleteProduct--id-">
</span>
<span id="execution-results-DELETEapi-v1-products-deleteProduct--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-products-deleteProduct--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-products-deleteProduct--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-products-deleteProduct--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-products-deleteProduct--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-products-deleteProduct--id-" data-method="DELETE"
      data-path="api/v1/products/deleteProduct/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-products-deleteProduct--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-products-deleteProduct--id-"
                    onclick="tryItOut('DELETEapi-v1-products-deleteProduct--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-products-deleteProduct--id-"
                    onclick="cancelTryOut('DELETEapi-v1-products-deleteProduct--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-products-deleteProduct--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/products/deleteProduct/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-products-deleteProduct--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-products-deleteProduct--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-products-deleteProduct--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>Product ID to delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="products-DELETEapi-v1-products-deleteAllProducts">Delete all products.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-products-deleteAllProducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/products/deleteAllProducts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/deleteAllProducts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-products-deleteAllProducts">
</span>
<span id="execution-results-DELETEapi-v1-products-deleteAllProducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-products-deleteAllProducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-products-deleteAllProducts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-products-deleteAllProducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-products-deleteAllProducts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-products-deleteAllProducts" data-method="DELETE"
      data-path="api/v1/products/deleteAllProducts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-products-deleteAllProducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-products-deleteAllProducts"
                    onclick="tryItOut('DELETEapi-v1-products-deleteAllProducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-products-deleteAllProducts"
                    onclick="cancelTryOut('DELETEapi-v1-products-deleteAllProducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-products-deleteAllProducts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/products/deleteAllProducts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-products-deleteAllProducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-products-deleteAllProducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="products-POSTapi-v1-products-newProduct">Store a newly created product.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-products-newProduct">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/products/newProduct" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "product_name=consequatur"\
    --form "price=11613.31890586"\
    --form "productheading=consequatur"\
    --form "color_id=17"\
    --form "size_id=17"\
    --form "size_name=consequatur"\
    --form "sku=consequatur"\
    --form "jewellery_care=consequatur"\
    --form "shipping_info=consequatur"\
    --form "length=consequatur"\
    --form "breadth=consequatur"\
    --form "height=consequatur"\
    --form "weight=consequatur"\
    --form "stock=17"\
    --form "images[]=@C:\Users\shakt\AppData\Local\Temp\phpA7FC.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/newProduct"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('product_name', 'consequatur');
body.append('price', '11613.31890586');
body.append('productheading', 'consequatur');
body.append('color_id', '17');
body.append('size_id', '17');
body.append('size_name', 'consequatur');
body.append('sku', 'consequatur');
body.append('jewellery_care', 'consequatur');
body.append('shipping_info', 'consequatur');
body.append('length', 'consequatur');
body.append('breadth', 'consequatur');
body.append('height', 'consequatur');
body.append('weight', 'consequatur');
body.append('stock', '17');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-products-newProduct">
</span>
<span id="execution-results-POSTapi-v1-products-newProduct" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-products-newProduct"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-products-newProduct"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-products-newProduct" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-products-newProduct">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-products-newProduct" data-method="POST"
      data-path="api/v1/products/newProduct"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-products-newProduct', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-products-newProduct"
                    onclick="tryItOut('POSTapi-v1-products-newProduct');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-products-newProduct"
                    onclick="cancelTryOut('POSTapi-v1-products-newProduct');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-products-newProduct"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/products/newProduct</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-products-newProduct"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-products-newProduct"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>The name of the product. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-v1-products-newProduct"
               value="11613.31890586"
               data-component="body">
    <br>
<p>The price of the product. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>productheading</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="productheading"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Short heading or tagline. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="color_id"                data-endpoint="POSTapi-v1-products-newProduct"
               value="17"
               data-component="body">
    <br>
<p>Color ID reference. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>size_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="size_id"                data-endpoint="POSTapi-v1-products-newProduct"
               value="17"
               data-component="body">
    <br>
<p>Size ID reference. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>size_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="size_name"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Size name. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sku</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sku"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>SKU code. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>jewellery_care</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="jewellery_care"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Care instructions. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipping_info</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shipping_info"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Shipping description. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>length</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="length"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Product length. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>breadth</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="breadth"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Product breadth. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>height</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="height"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Product height. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="weight"                data-endpoint="POSTapi-v1-products-newProduct"
               value="consequatur"
               data-component="body">
    <br>
<p>Product weight. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="POSTapi-v1-products-newProduct"
               value="17"
               data-component="body">
    <br>
<p>Available stock. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-v1-products-newProduct"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-v1-products-newProduct"
               data-component="body">
    <br>
<p>Product images.</p>
        </div>
        </form>

                    <h2 id="products-PUTapi-v1-products-updateProduct--id-">Update product by ID.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-products-updateProduct--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/products/updateProduct/consequatur" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "price=11613.31890586"\
    --form "product_name=consequatur"\
    --form "productheading=consequatur"\
    --form "images[]=@C:\Users\shakt\AppData\Local\Temp\phpA80C.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/updateProduct/consequatur"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('price', '11613.31890586');
body.append('product_name', 'consequatur');
body.append('productheading', 'consequatur');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-products-updateProduct--id-">
</span>
<span id="execution-results-PUTapi-v1-products-updateProduct--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-products-updateProduct--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-products-updateProduct--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-products-updateProduct--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-products-updateProduct--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-products-updateProduct--id-" data-method="PUT"
      data-path="api/v1/products/updateProduct/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-products-updateProduct--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-products-updateProduct--id-"
                    onclick="tryItOut('PUTapi-v1-products-updateProduct--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-products-updateProduct--id-"
                    onclick="cancelTryOut('PUTapi-v1-products-updateProduct--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-products-updateProduct--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/products/updateProduct/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>Product ID to update. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>The updated price. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>The updated product name. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>productheading</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="productheading"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Updated heading. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="images[0]"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="PUTapi-v1-products-updateProduct--id-"
               data-component="body">
    <br>
<p>Optional new product images.</p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
