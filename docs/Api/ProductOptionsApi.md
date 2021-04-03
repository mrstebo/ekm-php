# EkmPHP\ProductOptionsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productOptionsCreate()**](ProductOptionsApi.md#productOptionsCreate) | **POST** /api/v1/products/{id}/options | Add an option to a product
[**productOptionsDelete()**](ProductOptionsApi.md#productOptionsDelete) | **DELETE** /api/v1/products/{id}/options/{optionId} | Delete an option
[**productOptionsGet()**](ProductOptionsApi.md#productOptionsGet) | **GET** /api/v1/products/{id}/options/{optionId} | Get a product option
[**productOptionsGetAll()**](ProductOptionsApi.md#productOptionsGetAll) | **GET** /api/v1/products/{id}/options | Get a products options
[**productOptionsUpdate()**](ProductOptionsApi.md#productOptionsUpdate) | **PUT** /api/v1/products/{id}/options/{optionId} | Update a product option


## `productOptionsCreate()`

```php
productOptionsCreate($id, $v1AddProductOption): \EkmPHP\Models\TempestResponseV1ProductOption
```

Add an option to a product

Option items must be added separately

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$v1AddProductOption = new \EkmPHP\Models\V1AddProductOption(); // \EkmPHP\Models\V1AddProductOption

try {
    $result = $apiInstance->productOptionsCreate($id, $v1AddProductOption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **v1AddProductOption** | [**\EkmPHP\Models\V1AddProductOption**](../Model/V1AddProductOption.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOption**](../Model/TempestResponseV1ProductOption.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionsDelete()`

```php
productOptionsDelete($id, $optionId): \EkmPHP\Models\TempestResponseV1ProductOption
```

Delete an option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID

try {
    $result = $apiInstance->productOptionsDelete($id, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOption**](../Model/TempestResponseV1ProductOption.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionsGet()`

```php
productOptionsGet($id, $optionId): \EkmPHP\Models\TempestResponseV1ProductOption
```

Get a product option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID

try {
    $result = $apiInstance->productOptionsGet($id, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOption**](../Model/TempestResponseV1ProductOption.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionsGetAll()`

```php
productOptionsGetAll($id): \EkmPHP\Models\TempestResponseListV1ProductOption
```

Get a products options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID

try {
    $result = $apiInstance->productOptionsGetAll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |

### Return type

[**\EkmPHP\Models\TempestResponseListV1ProductOption**](../Model/TempestResponseListV1ProductOption.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionsUpdate()`

```php
productOptionsUpdate($id, $optionId, $v1UpdateProductOption): \EkmPHP\Models\TempestResponseV1ProductOption
```

Update a product option

Option items must be updated separately

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The product ID
$optionId = 56; // int | The option ID
$v1UpdateProductOption = new \EkmPHP\Models\V1UpdateProductOption(); // \EkmPHP\Models\V1UpdateProductOption

try {
    $result = $apiInstance->productOptionsUpdate($id, $optionId, $v1UpdateProductOption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The product ID |
 **optionId** | **int**| The option ID |
 **v1UpdateProductOption** | [**\EkmPHP\Models\V1UpdateProductOption**](../Model/V1UpdateProductOption.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductOption**](../Model/TempestResponseV1ProductOption.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
