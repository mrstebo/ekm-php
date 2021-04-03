# Mrstebo\EkmPHP\ProductStockApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productStockGet()**](ProductStockApi.md#productStockGet) | **GET** /api/v1/products/{id}/stock | Get the stock for a product
[**productStockUpdate()**](ProductStockApi.md#productStockUpdate) | **PUT** /api/v1/products/{id}/stock | Set the stock for a product


## `productStockGet()`

```php
productStockGet($id): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductStock
```

Get the stock for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productStockGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStockApi->productStockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductStock**](../Model/TempestResponseV1ProductStock.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productStockUpdate()`

```php
productStockUpdate($id, $v1ProductStock): \Mrstebo\EkmPHP\Models\TempestResponseV1ProductStock
```

Set the stock for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\ProductStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$v1ProductStock = new \Mrstebo\EkmPHP\Models\V1ProductStock(); // \Mrstebo\EkmPHP\Models\V1ProductStock

try {
    $result = $apiInstance->productStockUpdate($id, $v1ProductStock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStockApi->productStockUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **v1ProductStock** | [**\Mrstebo\EkmPHP\Models\V1ProductStock**](../Model/V1ProductStock.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1ProductStock**](../Model/TempestResponseV1ProductStock.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
