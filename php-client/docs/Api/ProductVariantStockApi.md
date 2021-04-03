# EkmPHP\ProductVariantStockApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productVariantStockGet()**](ProductVariantStockApi.md#productVariantStockGet) | **GET** /api/v1/products/{id}/variants/{variantId}/stock | Get a product variant stock
[**productVariantStockUpdate()**](ProductVariantStockApi.md#productVariantStockUpdate) | **PUT** /api/v1/products/{id}/variants/{variantId}/stock | Update a product variant stock


## `productVariantStockGet()`

```php
productVariantStockGet($id, $variantId): \EkmPHP\Models\TempestResponseV1ProductVariantStock
```

Get a product variant stock

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductVariantStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The varaint ID

try {
    $result = $apiInstance->productVariantStockGet($id, $variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantStockApi->productVariantStockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The varaint ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductVariantStock**](../Model/TempestResponseV1ProductVariantStock.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantStockUpdate()`

```php
productVariantStockUpdate($id, $variantId, $v1ProductVariantStock): \EkmPHP\Models\TempestResponseV1ProductVariantStock
```

Update a product variant stock

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductVariantStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$variantId = 56; // int | The varaint ID
$v1ProductVariantStock = new \EkmPHP\Models\V1ProductVariantStock(); // \EkmPHP\Models\V1ProductVariantStock

try {
    $result = $apiInstance->productVariantStockUpdate($id, $variantId, $v1ProductVariantStock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantStockApi->productVariantStockUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **variantId** | **int**| The varaint ID |
 **v1ProductVariantStock** | [**\EkmPHP\Models\V1ProductVariantStock**](../Model/V1ProductVariantStock.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductVariantStock**](../Model/TempestResponseV1ProductVariantStock.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
