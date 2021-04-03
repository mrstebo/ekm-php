# EkmPHP\TaxApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxCreateTaxRate()**](TaxApi.md#taxCreateTaxRate) | **POST** /api/v1/settings/tax/rates | Add a Tax Rate
[**taxDeleteTaxRate()**](TaxApi.md#taxDeleteTaxRate) | **DELETE** /api/v1/settings/tax/rates/{id} | Delete a Tax Rate
[**taxGetTaxRate()**](TaxApi.md#taxGetTaxRate) | **GET** /api/v1/settings/tax/rates/{id} | Get a specific Tax Rate
[**taxGetTaxRates()**](TaxApi.md#taxGetTaxRates) | **GET** /api/v1/settings/tax/rates | Get a list of Tax Rates
[**taxGetTaxSettings()**](TaxApi.md#taxGetTaxSettings) | **GET** /api/v1/settings/tax | Get the current Tax Settings
[**taxUpdateTaxRate()**](TaxApi.md#taxUpdateTaxRate) | **PUT** /api/v1/settings/tax/rates/{id} | Update a Tax Rate
[**taxUpdateTaxSettings()**](TaxApi.md#taxUpdateTaxSettings) | **PUT** /api/v1/settings/tax | Update the current Tax Settings


## `taxCreateTaxRate()`

```php
taxCreateTaxRate($taxRateModel): \EkmPHP\Models\TempestResponseTaxRateModel
```

Add a Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxRateModel = new \EkmPHP\Models\TaxRateModel(); // \EkmPHP\Models\TaxRateModel

try {
    $result = $apiInstance->taxCreateTaxRate($taxRateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxCreateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxRateModel** | [**\EkmPHP\Models\TaxRateModel**](../Model/TaxRateModel.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseTaxRateModel**](../Model/TempestResponseTaxRateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxDeleteTaxRate()`

```php
taxDeleteTaxRate($id): \EkmPHP\Models\TempestResponseTaxRateModel
```

Delete a Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->taxDeleteTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxDeleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\EkmPHP\Models\TempestResponseTaxRateModel**](../Model/TempestResponseTaxRateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxGetTaxRate()`

```php
taxGetTaxRate($id): \EkmPHP\Models\TempestResponseTaxRateModel
```

Get a specific Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->taxGetTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxGetTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\EkmPHP\Models\TempestResponseTaxRateModel**](../Model/TempestResponseTaxRateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxGetTaxRates()`

```php
taxGetTaxRates(): \EkmPHP\Models\TempestResponseListTaxRateModel
```

Get a list of Tax Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taxGetTaxRates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxGetTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EkmPHP\Models\TempestResponseListTaxRateModel**](../Model/TempestResponseListTaxRateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxGetTaxSettings()`

```php
taxGetTaxSettings(): \EkmPHP\Models\TempestResponseTaxSettings
```

Get the current Tax Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taxGetTaxSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxGetTaxSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EkmPHP\Models\TempestResponseTaxSettings**](../Model/TempestResponseTaxSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxUpdateTaxRate()`

```php
taxUpdateTaxRate($id, $taxRateModel): \EkmPHP\Models\TempestResponseTaxRateModel
```

Update a Tax Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$taxRateModel = new \EkmPHP\Models\TaxRateModel(); // \EkmPHP\Models\TaxRateModel

try {
    $result = $apiInstance->taxUpdateTaxRate($id, $taxRateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxUpdateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **taxRateModel** | [**\EkmPHP\Models\TaxRateModel**](../Model/TaxRateModel.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseTaxRateModel**](../Model/TempestResponseTaxRateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxUpdateTaxSettings()`

```php
taxUpdateTaxSettings($taxSettings): \EkmPHP\Models\TempestResponseTaxSettings
```

Update the current Tax Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxSettings = new \EkmPHP\Models\TaxSettings(); // \EkmPHP\Models\TaxSettings

try {
    $result = $apiInstance->taxUpdateTaxSettings($taxSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxUpdateTaxSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxSettings** | [**\EkmPHP\Models\TaxSettings**](../Model/TaxSettings.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseTaxSettings**](../Model/TempestResponseTaxSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
