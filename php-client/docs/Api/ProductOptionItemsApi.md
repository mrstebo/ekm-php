# EkmPHP\ProductOptionItemsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productOptionItemsCreate()**](ProductOptionItemsApi.md#productOptionItemsCreate) | **POST** /api/v1/products/{id}/options/{optionId}/items | Add an item to a product option
[**productOptionItemsDelete()**](ProductOptionItemsApi.md#productOptionItemsDelete) | **DELETE** /api/v1/products/{id}/options/{optionId}/items/{optionItemId} | Delete an option item
[**productOptionItemsUpdate()**](ProductOptionItemsApi.md#productOptionItemsUpdate) | **PUT** /api/v1/products/{id}/options/{optionId}/items/{optionItemId} | Update a product option item


## `productOptionItemsCreate()`

```php
productOptionItemsCreate($id, $optionId, $v1ProductOptionItem): \EkmPHP\Models\TempestResponseV1ProductOptionItem
```

Add an item to a product option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID
$v1ProductOptionItem = new \EkmPHP\Models\V1ProductOptionItem(); // \EkmPHP\Models\V1ProductOptionItem

try {
    $result = $apiInstance->productOptionItemsCreate($id, $optionId, $v1ProductOptionItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionItemsApi->productOptionItemsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |
 **v1ProductOptionItem** | [**\EkmPHP\Models\V1ProductOptionItem**](../Model/V1ProductOptionItem.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOptionItem**](../Model/TempestResponseV1ProductOptionItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionItemsDelete()`

```php
productOptionItemsDelete($id, $optionId, $optionItemId): \EkmPHP\Models\TempestResponseV1ProductOptionItem
```

Delete an option item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID
$optionItemId = 56; // int | The option item ID

try {
    $result = $apiInstance->productOptionItemsDelete($id, $optionId, $optionItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionItemsApi->productOptionItemsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |
 **optionItemId** | **int**| The option item ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOptionItem**](../Model/TempestResponseV1ProductOptionItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionItemsUpdate()`

```php
productOptionItemsUpdate($id, $optionId, $optionItemId, $v1ProductOptionItem): \EkmPHP\Models\TempestResponseV1ProductOptionItem
```

Update a product option item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID
$optionItemId = 56; // int | The option item ID
$v1ProductOptionItem = new \EkmPHP\Models\V1ProductOptionItem(); // \EkmPHP\Models\V1ProductOptionItem

try {
    $result = $apiInstance->productOptionItemsUpdate($id, $optionId, $optionItemId, $v1ProductOptionItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionItemsApi->productOptionItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |
 **optionItemId** | **int**| The option item ID |
 **v1ProductOptionItem** | [**\EkmPHP\Models\V1ProductOptionItem**](../Model/V1ProductOptionItem.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOptionItem**](../Model/TempestResponseV1ProductOptionItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
