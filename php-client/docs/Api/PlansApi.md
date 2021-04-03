# Mrstebo\EkmPHP\PlansApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**plansGetAll()**](PlansApi.md#plansGetAll) | **GET** /api/v1/settings/plans | Get all plans
[**plansGetById()**](PlansApi.md#plansGetById) | **GET** /api/v1/settings/plans/{id} | Get a plan by id
[**plansGetCurrent()**](PlansApi.md#plansGetCurrent) | **GET** /api/v1/settings/plans/current | Get the current users plan


## `plansGetAll()`

```php
plansGetAll(): \Mrstebo\EkmPHP\Models\TempestResponseListPlan
```

Get all plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->plansGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->plansGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListPlan**](../Model/TempestResponseListPlan.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `plansGetById()`

```php
plansGetById($id): \Mrstebo\EkmPHP\Models\TempestResponsePlan
```

Get a plan by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->plansGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->plansGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponsePlan**](../Model/TempestResponsePlan.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `plansGetCurrent()`

```php
plansGetCurrent(): \Mrstebo\EkmPHP\Models\TempestResponsePlan
```

Get the current users plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->plansGetCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->plansGetCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponsePlan**](../Model/TempestResponsePlan.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
