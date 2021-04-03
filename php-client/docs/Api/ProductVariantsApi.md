# Mrstebo\EkmPHP\ProductVariantsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productVariantsAssignImageByUrlToProduct()**](ProductVariantsApi.md#productVariantsAssignImageByUrlToProduct) | **POST** /api/v1/products/{id}/variants/{variantId}/images/{imageNumber} | Set a variants image to a URL
[**productVariantsCreate()**](ProductVariantsApi.md#productVariantsCreate) | **POST** /api/v1/products/{id}/variants | Add a variant to a product
[**productVariantsDelete()**](ProductVariantsApi.md#productVariantsDelete) | **DELETE** /api/v1/products/{id}/variants/{variantId} | Delete a variant
[**productVariantsGet()**](ProductVariantsApi.md#productVariantsGet) | **GET** /api/v1/products/variants/{variantId} | Get a product variant
[**productVariantsGetAll()**](ProductVariantsApi.md#productVariantsGetAll) | **GET** /api/v1/products/{id}/variants | Get a products variants
[**productVariantsGetProductImages()**](ProductVariantsApi.md#productVariantsGetProductImages) | **GET** /api/v1/products/{id}/variants/{variantId}/images | Get a variant&#39;s images.
[**productVariantsGetProductVariant()**](ProductVariantsApi.md#productVariantsGetProductVariant) | **GET** /api/v1/products/{id}/variants/{variantId} | Get a product variant
[**productVariantsSearch()**](ProductVariantsApi.md#productVariantsSearch) | **GET** /api/v1/variants/search | Searches variants based on search criteria
[**productVariantsUpdate()**](ProductVariantsApi.md#productVariantsUpdate) | **PUT** /api/v1/products/{id}/variants/{variantId} | Update a product variant


## `productVariantsAssignImageByUrlToProduct()`

```php
productVariantsAssignImageByUrlToProduct($id, $variantId, $imageNumber, $imageUrl): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages
```

Set a variants image to a URL

An example URL request path would look something like:                    https://api.ekm.net/api/v1/products/5/variants/42/images/1?imageurl=https://www.ekm.com/images/design/en-AU/logo.svg

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The variant ID
$imageNumber = 56; // int | The image number
$imageUrl = 'imageUrl_example'; // string | The URL of the image

try {
    $result = $apiInstance->productVariantsAssignImageByUrlToProduct($id, $variantId, $imageNumber, $imageUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsAssignImageByUrlToProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The variant ID |
 **imageNumber** | **int**| The image number |
 **imageUrl** | **string**| The URL of the image |

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

## `productVariantsCreate()`

```php
productVariantsCreate($id, $v1ProductVariant): \Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant
```

Add a variant to a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$v1ProductVariant = new \Mrstebo\EkmPHP\Models\V1ProductVariant(); // \Mrstebo\EkmPHP\Models\V1ProductVariant

try {
    $result = $apiInstance->productVariantsCreate($id, $v1ProductVariant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **v1ProductVariant** | [**\Mrstebo\EkmPHP\Models\V1ProductVariant**](../Model/V1ProductVariant.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant**](../Model/TempestResponseListV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsDelete()`

```php
productVariantsDelete($id, $variantId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant
```

Delete a variant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The variant ID

try {
    $result = $apiInstance->productVariantsDelete($id, $variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The variant ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant**](../Model/TempestResponseV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsGet()`

```php
productVariantsGet($variantId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant
```

Get a product variant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variantId = 56; // int | The variant ID

try {
    $result = $apiInstance->productVariantsGet($variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variantId** | **int**| The variant ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant**](../Model/TempestResponseV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsGetAll()`

```php
productVariantsGetAll($id): \Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant
```

Get a products variants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productVariantsGetAll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant**](../Model/TempestResponseListV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsGetProductImages()`

```php
productVariantsGetProductImages($id, $variantId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductImages
```

Get a variant's images.

Images stored on EKM servers will have the location property of the response set to the path of the image file. This will need to be prepended with the shop's domain.  Remote images will have the remote property of the response set to the URL of the image.  Images that have been deleted will have the location property of the response set to \"No image available.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The variant ID

try {
    $result = $apiInstance->productVariantsGetProductImages($id, $variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsGetProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The variant ID |

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

## `productVariantsGetProductVariant()`

```php
productVariantsGetProductVariant($id, $variantId): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant
```

Get a product variant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The variant ID

try {
    $result = $apiInstance->productVariantsGetProductVariant($id, $variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsGetProductVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The variant ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant**](../Model/TempestResponseV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsSearch()`

```php
productVariantsSearch($query, $page, $limit, $orderby): \Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant
```

Searches variants based on search criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
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
    $result = $apiInstance->productVariantsSearch($query, $page, $limit, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsSearch: ', $e->getMessage(), PHP_EOL;
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

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1ProductVariant**](../Model/TempestResponseListV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantsUpdate()`

```php
productVariantsUpdate($id, $variantId, $v1ProductVariant): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant
```

Update a product variant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The variant ID
$v1ProductVariant = new \Mrstebo\EkmPHP\Models\V1ProductVariant(); // \Mrstebo\EkmPHP\Models\V1ProductVariant

try {
    $result = $apiInstance->productVariantsUpdate($id, $variantId, $v1ProductVariant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->productVariantsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The variant ID |
 **v1ProductVariant** | [**\Mrstebo\EkmPHP\Models\V1ProductVariant**](../Model/V1ProductVariant.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductVariant**](../Model/TempestResponseV1ProductVariant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
