# Mrstebo\EkmPHP\OrderStatusesApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderStatusesGetOrderStatuses()**](OrderStatusesApi.md#orderStatusesGetOrderStatuses) | **GET** /api/v1/settings/orderstatuses | Get the current Order Statuses


## `orderStatusesGetOrderStatuses()`

```php
orderStatusesGetOrderStatuses(): \Mrstebo\EkmPHP\Models\TempestResponseV1OrderStatuses
```

Get the current Order Statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\OrderStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->orderStatusesGetOrderStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusesApi->orderStatusesGetOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1OrderStatuses**](../Model/TempestResponseV1OrderStatuses.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
