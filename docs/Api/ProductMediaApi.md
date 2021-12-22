# EkmPHP\ProductMediaApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productMediaDelete()**](ProductMediaApi.md#productMediaDelete) | **DELETE** /api/v2/products/{id}/media/{position} | Delete a product&#39;s media by position
[**productMediaGetProductMedia()**](ProductMediaApi.md#productMediaGetProductMedia) | **GET** /api/v2/products/{id}/media | Get all of a product&#39;s associated media
[**productMediaUpdateProductMedia()**](ProductMediaApi.md#productMediaUpdateProductMedia) | **POST** /api/v2/products/{id}/media/{position} | Update a product&#39;s media by position


## `productMediaDelete()`

```php
productMediaDelete($id, $position): \EkmPHP\Models\TempestResponseListV2ProductMedia
```

Delete a product's media by position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the product or variant
$position = 56; // int | The media position to be updated

try {
    $result = $apiInstance->productMediaDelete($id, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaApi->productMediaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the product or variant |
 **position** | **int**| The media position to be updated |

### Return type

[**\EkmPHP\Models\TempestResponseListV2ProductMedia**](../Model/TempestResponseListV2ProductMedia.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productMediaGetProductMedia()`

```php
productMediaGetProductMedia($id): \EkmPHP\Models\TempestResponseListV2ProductMedia
```

Get all of a product's associated media

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the product or variant

try {
    $result = $apiInstance->productMediaGetProductMedia($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaApi->productMediaGetProductMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the product or variant |

### Return type

[**\EkmPHP\Models\TempestResponseListV2ProductMedia**](../Model/TempestResponseListV2ProductMedia.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productMediaUpdateProductMedia()`

```php
productMediaUpdateProductMedia($id, $position, $v2AddProductMediaImage): \EkmPHP\Models\TempestResponseListV2ProductMedia
```

Update a product's media by position

An image can be added by providing either a URL to an existing image or providing a file name and base64 encoded attachment of the image.  If both are provided the attachment will be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the product or variant
$position = 56; // int | The media position to be updated
$v2AddProductMediaImage = {"source_url":"https://ekm-example.com/test-img.gif","product_id":1,"position":1,"attachment":null,"file_name":null}; // \EkmPHP\Models\V2AddProductMediaImage

try {
    $result = $apiInstance->productMediaUpdateProductMedia($id, $position, $v2AddProductMediaImage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaApi->productMediaUpdateProductMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the product or variant |
 **position** | **int**| The media position to be updated |
 **v2AddProductMediaImage** | [**\EkmPHP\Models\V2AddProductMediaImage**](../Model/V2AddProductMediaImage.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseListV2ProductMedia**](../Model/TempestResponseListV2ProductMedia.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
