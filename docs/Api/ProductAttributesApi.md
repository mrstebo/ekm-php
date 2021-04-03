# EkmPHP\ProductAttributesApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productAttributesCreate()**](ProductAttributesApi.md#productAttributesCreate) | **POST** /api/v1/settings/productattributes | Add a product attribute
[**productAttributesDelete()**](ProductAttributesApi.md#productAttributesDelete) | **DELETE** /api/v1/settings/productattributes/{attribute_key} | Delete a product attribute
[**productAttributesGet()**](ProductAttributesApi.md#productAttributesGet) | **GET** /api/v1/settings/productattributes/{attribute_key} | Get a product attribute
[**productAttributesGetAll()**](ProductAttributesApi.md#productAttributesGetAll) | **GET** /api/v1/settings/productattributes | Get all product attributes
[**productAttributesUpdate()**](ProductAttributesApi.md#productAttributesUpdate) | **PUT** /api/v1/settings/productattributes/{attribute_key} | Update a product attribute


## `productAttributesCreate()`

```php
productAttributesCreate($v1ProductAttribute): \EkmPHP\Models\TempestResponseV1ProductAttribute
```

Add a product attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1ProductAttribute = new \EkmPHP\Models\V1ProductAttribute(); // \EkmPHP\Models\V1ProductAttribute

try {
    $result = $apiInstance->productAttributesCreate($v1ProductAttribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributesApi->productAttributesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1ProductAttribute** | [**\EkmPHP\Models\V1ProductAttribute**](../Model/V1ProductAttribute.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttribute**](../Model/TempestResponseV1ProductAttribute.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributesDelete()`

```php
productAttributesDelete($attributeKey): \EkmPHP\Models\TempestResponseV1ProductAttribute
```

Delete a product attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeKey = 'attributeKey_example'; // string | The attribute ID

try {
    $result = $apiInstance->productAttributesDelete($attributeKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributesApi->productAttributesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeKey** | **string**| The attribute ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttribute**](../Model/TempestResponseV1ProductAttribute.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributesGet()`

```php
productAttributesGet($attributeKey): \EkmPHP\Models\TempestResponseV1ProductAttribute
```

Get a product attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeKey = 'attributeKey_example'; // string | The attribute item key

try {
    $result = $apiInstance->productAttributesGet($attributeKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributesApi->productAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeKey** | **string**| The attribute item key |

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttribute**](../Model/TempestResponseV1ProductAttribute.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributesGetAll()`

```php
productAttributesGetAll(): \EkmPHP\Models\TempestResponseListV1ProductAttribute
```

Get all product attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productAttributesGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributesApi->productAttributesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EkmPHP\Models\TempestResponseListV1ProductAttribute**](../Model/TempestResponseListV1ProductAttribute.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributesUpdate()`

```php
productAttributesUpdate($attributeKey, $v1ProductAttribute): \EkmPHP\Models\TempestResponseV1ProductAttribute
```

Update a product attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\ProductAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeKey = 'attributeKey_example'; // string | The attribute ID
$v1ProductAttribute = new \EkmPHP\Models\V1ProductAttribute(); // \EkmPHP\Models\V1ProductAttribute | The product attribute item to update

try {
    $result = $apiInstance->productAttributesUpdate($attributeKey, $v1ProductAttribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributesApi->productAttributesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeKey** | **string**| The attribute ID |
 **v1ProductAttribute** | [**\EkmPHP\Models\V1ProductAttribute**](../Model/V1ProductAttribute.md)| The product attribute item to update | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1ProductAttribute**](../Model/TempestResponseV1ProductAttribute.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
