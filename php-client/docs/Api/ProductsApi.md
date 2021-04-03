# Mrstebo\EkmPHP\ProductsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsAssignImageByUrlToProduct()**](ProductsApi.md#productsAssignImageByUrlToProduct) | **POST** /api/v1/products/{id}/images/{imageNumber} | Assign an image by Url to a product
[**productsCreate()**](ProductsApi.md#productsCreate) | **POST** /api/v1/products | Add a Product
[**productsDelete()**](ProductsApi.md#productsDelete) | **DELETE** /api/v1/products/{id} | Delete a Product
[**productsDeleteCategoryManaged()**](ProductsApi.md#productsDeleteCategoryManaged) | **DELETE** /api/v1/products/{id}/categorymanaged/{categoryId} | Stops a product from being managed by another category
[**productsGet()**](ProductsApi.md#productsGet) | **GET** /api/v1/products/{id} | Get a product
[**productsGetAll()**](ProductsApi.md#productsGetAll) | **GET** /api/v1/products | Get a paginated set of products
[**productsGetProductImages()**](ProductsApi.md#productsGetProductImages) | **GET** /api/v1/products/{id}/images | Get a product&#39;s images.
[**productsSearch()**](ProductsApi.md#productsSearch) | **GET** /api/v1/products/search | Searches products based on search criteria
[**productsSetCategoryManaged()**](ProductsApi.md#productsSetCategoryManaged) | **POST** /api/v1/products/{id}/categorymanaged/{categoryId} | Set a product to be managed by another category
[**productsUpdate()**](ProductsApi.md#productsUpdate) | **PUT** /api/v1/products/{id} | Update a Product


## `productsAssignImageByUrlToProduct()`

```php
productsAssignImageByUrlToProduct($id, $imageNumber, $imageUrl): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages
```

Assign an image by Url to a product

An example URL request path would look something like:                    https://api.ekm.net/api/v1/products/5/images/1?imageurl=https://www.ekm.com/images/design/en-AU/logo.svg

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$imageNumber = 56; // int
$imageUrl = 'imageUrl_example'; // string

try {
    $result = $apiInstance->productsAssignImageByUrlToProduct($id, $imageNumber, $imageUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsAssignImageByUrlToProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **imageNumber** | **int**|  |
 **imageUrl** | **string**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages**](../Model/TempestResponseV1ProductImages.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsCreate()`

```php
productsCreate($v1AddProduct): \Mrstebo\EkmPHP\Models\TempestResponseV1Product
```

Add a Product

Options and variants must be added separately

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddProduct = new \Mrstebo\EkmPHP\Models\V1AddProduct(); // \Mrstebo\EkmPHP\Models\V1AddProduct

try {
    $result = $apiInstance->productsCreate($v1AddProduct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1AddProduct** | [**\Mrstebo\EkmPHP\Models\V1AddProduct**](../Model/V1AddProduct.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Product**](../Model/TempestResponseV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsDelete()`

```php
productsDelete($id, $categoryId): \Mrstebo\EkmPHP\Models\TempestResponseV1Product
```

Delete a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$categoryId = 56; // int | The category ID - Passing a category ID deletes the product from the specific category only

try {
    $result = $apiInstance->productsDelete($id, $categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **categoryId** | **int**| The category ID - Passing a category ID deletes the product from the specific category only | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Product**](../Model/TempestResponseV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsDeleteCategoryManaged()`

```php
productsDeleteCategoryManaged($id, $categoryId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductCategory
```

Stops a product from being managed by another category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$categoryId = 56; // int

try {
    $result = $apiInstance->productsDeleteCategoryManaged($id, $categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsDeleteCategoryManaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **categoryId** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductCategory**](../Model/TempestResponseV1ProductCategory.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGet()`

```php
productsGet($id): \Mrstebo\EkmPHP\Models\TempestResponseV1Product
```

Get a product

The SEOFriendlyUrl property can be combined with the primary shop domain to get the shop page url for a Product in the format:  {primary_domain}/{SEOFriendlyUrl}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Product**](../Model/TempestResponseV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetAll()`

```php
productsGetAll($page, $limit): \Mrstebo\EkmPHP\Models\TempestResponseListV1Product
```

Get a paginated set of products

The SEOFriendlyUrl property can be combined with the primary shop domain to get the shop page url for a Product in the format:  {primary_domain}/{SEOFriendlyUrl}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->productsGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Product**](../Model/TempestResponseListV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductImages()`

```php
productsGetProductImages($id): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages
```

Get a product's images.

Images stored on EKM servers will have the location property of the response set to the path of the image file. This will need to be prepended with the shop's domain.  Remote images will have the remote property of the response set to the URL of the image.  Images that have been deleted will have the location property of the response set to \"No image available.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productsGetProductImages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages**](../Model/TempestResponseV1ProductImages.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsSearch()`

```php
productsSearch($query, $page, $limit, $orderby): \Mrstebo\EkmPHP\Models\TempestResponseListV1Product
```

Searches products based on search criteria

The SEOFriendlyUrl property can be combined with the primary shop domain to get the shop page url for a Product in the format:  {primary_domain}/{SEOFriendlyUrl}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A <a href=\"#tag/OData\" target=\"_blank\">search</a> query e.g. live eq true
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)
$orderby = 'orderby_example'; // string | Field to order results. Prefix with a - (dash) for descending e.g. -id

try {
    $result = $apiInstance->productsSearch($query, $page, $limit, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| A &lt;a href&#x3D;\&quot;#tag/OData\&quot; target&#x3D;\&quot;_blank\&quot;&gt;search&lt;/a&gt; query e.g. live eq true |
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]
 **orderby** | **string**| Field to order results. Prefix with a - (dash) for descending e.g. -id | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Product**](../Model/TempestResponseListV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsSetCategoryManaged()`

```php
productsSetCategoryManaged($id, $categoryId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductCategory
```

Set a product to be managed by another category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$categoryId = 56; // int

try {
    $result = $apiInstance->productsSetCategoryManaged($id, $categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsSetCategoryManaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **categoryId** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductCategory**](../Model/TempestResponseV1ProductCategory.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsUpdate()`

```php
productsUpdate($id, $v1UpdateProduct): \Mrstebo\EkmPHP\Models\TempestResponseV1Product
```

Update a Product

Options and variants must be updated separately

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$v1UpdateProduct = new \Mrstebo\EkmPHP\Models\V1UpdateProduct(); // \Mrstebo\EkmPHP\Models\V1UpdateProduct

try {
    $result = $apiInstance->productsUpdate($id, $v1UpdateProduct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **v1UpdateProduct** | [**\Mrstebo\EkmPHP\Models\V1UpdateProduct**](../Model/V1UpdateProduct.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Product**](../Model/TempestResponseV1Product.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
