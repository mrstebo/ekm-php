# EkmPHP\ProductAttributeItemsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productAttributeItemsCreate()**](ProductAttributeItemsApi.md#productAttributeItemsCreate) | **POST** /api/v1/products/{id}/attributes | Add a attribute item to a product
[**productAttributeItemsGet()**](ProductAttributeItemsApi.md#productAttributeItemsGet) | **GET** /api/v1/products/{id}/attributes/{attribute_id} | Get a product attribute item
[**productAttributeItemsGetAll()**](ProductAttributeItemsApi.md#productAttributeItemsGetAll) | **GET** /api/v1/products/{id}/attributes | Get all of a products attribute items
[**productAttributeItemsUpdate()**](ProductAttributeItemsApi.md#productAttributeItemsUpdate) | **PUT** /api/v1/products/{id}/attributes/{attribute_id} | Update a product attribute item


## `productAttributeItemsCreate()`

```php
productAttributeItemsCreate($id, $v1ProductAttributeItem): \EkmPHP\Models\TempestResponseV1ProductAttributeItem
```

Add a attribute item to a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributeItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$v1ProductAttributeItem = new \EkmPHP\Models\V1ProductAttributeItem(); // \EkmPHP\Models\V1ProductAttributeItem | The product attribute item to add

try {
    $result = $apiInstance->productAttributeItemsCreate($id, $v1ProductAttributeItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeItemsApi->productAttributeItemsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **v1ProductAttributeItem** | [**\EkmPHP\Models\V1ProductAttributeItem**](../Model/V1ProductAttributeItem.md)| The product attribute item to add | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttributeItem**](../Model/TempestResponseV1ProductAttributeItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeItemsGet()`

```php
productAttributeItemsGet($id, $attributeId): \EkmPHP\Models\TempestResponseV1ProductAttributeItem
```

Get a product attribute item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributeItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$attributeId = 56; // int | The attribute item ID

try {
    $result = $apiInstance->productAttributeItemsGet($id, $attributeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeItemsApi->productAttributeItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **attributeId** | **int**| The attribute item ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttributeItem**](../Model/TempestResponseV1ProductAttributeItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeItemsGetAll()`

```php
productAttributeItemsGetAll($id): \EkmPHP\Models\TempestResponseListV1ProductAttributeItem
```

Get all of a products attribute items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributeItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productAttributeItemsGetAll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeItemsApi->productAttributeItemsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\EkmPHP\Models\TempestResponseListV1ProductAttributeItem**](../Model/TempestResponseListV1ProductAttributeItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeItemsUpdate()`

```php
productAttributeItemsUpdate($id, $attributeId, $v1ProductAttributeItem): \EkmPHP\Models\TempestResponseV1ProductAttributeItem
```

Update a product attribute item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributeItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$attributeId = 56; // int | The attribute item ID
$v1ProductAttributeItem = new \EkmPHP\Models\V1ProductAttributeItem(); // \EkmPHP\Models\V1ProductAttributeItem | The product attribute item to update

try {
    $result = $apiInstance->productAttributeItemsUpdate($id, $attributeId, $v1ProductAttributeItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeItemsApi->productAttributeItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **attributeId** | **int**| The attribute item ID |
 **v1ProductAttributeItem** | [**\EkmPHP\Models\V1ProductAttributeItem**](../Model/V1ProductAttributeItem.md)| The product attribute item to update | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttributeItem**](../Model/TempestResponseV1ProductAttributeItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
