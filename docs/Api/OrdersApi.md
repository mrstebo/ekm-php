# EkmPHP\OrdersApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGetAll()**](OrdersApi.md#ordersGetAll) | **GET** /api/v2/orders | Get a paginated set of orders
[**ordersGetById()**](OrdersApi.md#ordersGetById) | **GET** /api/v2/orders/{id} | Get an order by ID
[**ordersGetItems()**](OrdersApi.md#ordersGetItems) | **GET** /api/v2/orders/{id}/items | Get an order&#39;s items
[**ordersGetOrderItemById()**](OrdersApi.md#ordersGetOrderItemById) | **GET** /api/v2/orders/{id}/items/{itemId} | Get a specific item from an order
[**ordersSearch()**](OrdersApi.md#ordersSearch) | **GET** /api/v2/orders/search | Searches orders based on search criteria
[**ordersUpdateDeliveryTracking()**](OrdersApi.md#ordersUpdateDeliveryTracking) | **PUT** /api/v2/orders/{id}/deliveryTracking | Updates delivery tracking info for an order
[**ordersUpdateStatus()**](OrdersApi.md#ordersUpdateStatus) | **PUT** /api/v2/orders/{id}/status | Updates the status of an order


## `ordersGetAll()`

```php
ordersGetAll($page, $limit): \EkmPHP\Models\TempestResponseListV2Order
```

Get a paginated set of orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->ordersGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseListV2Order**](../Model/TempestResponseListV2Order.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGetById()`

```php
ordersGetById($id): \EkmPHP\Models\TempestResponseV2Order
```

Get an order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order ID

try {
    $result = $apiInstance->ordersGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID |

### Return type

[**\EkmPHP\Models\TempestResponseV2Order**](../Model/TempestResponseV2Order.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGetItems()`

```php
ordersGetItems($id): \EkmPHP\Models\TempestResponseListV2OrderItem
```

Get an order's items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order's ID'

try {
    $result = $apiInstance->ordersGetItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order&#39;s ID&#39; |

### Return type

[**\EkmPHP\Models\TempestResponseListV2OrderItem**](../Model/TempestResponseListV2OrderItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGetOrderItemById()`

```php
ordersGetOrderItemById($id, $itemId, $itemId2): \EkmPHP\Models\TempestResponseV2OrderItem
```

Get a specific item from an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order's ID
$itemId = 56; // int | The order item's ID'
$itemId2 = 56; // int | The order item ID

try {
    $result = $apiInstance->ordersGetOrderItemById($id, $itemId, $itemId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetOrderItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order&#39;s ID |
 **itemId** | **int**| The order item&#39;s ID&#39; |
 **itemId2** | **int**| The order item ID |

### Return type

[**\EkmPHP\Models\TempestResponseV2OrderItem**](../Model/TempestResponseV2OrderItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersSearch()`

```php
ordersSearch($page, $limit, $query, $orderby): \EkmPHP\Models\TempestResponseListV2Order
```

Searches orders based on search criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)
$query = 'query_example'; // string | A <a href=\"#tag/OData\" target=\"_blank\">search</a> query e.g. status eq 'PENDING'
$orderby = 'orderby_example'; // string | Field to order results. Prefix with a - (dash) for descending e.g. -id

try {
    $result = $apiInstance->ordersSearch($page, $limit, $query, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]
 **query** | **string**| A &lt;a href&#x3D;\&quot;#tag/OData\&quot; target&#x3D;\&quot;_blank\&quot;&gt;search&lt;/a&gt; query e.g. status eq &#39;PENDING&#39; | [optional]
 **orderby** | **string**| Field to order results. Prefix with a - (dash) for descending e.g. -id | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseListV2Order**](../Model/TempestResponseListV2Order.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersUpdateDeliveryTracking()`

```php
ordersUpdateDeliveryTracking($id, $v1OrderDeliveryTracking): \EkmPHP\Models\TempestResponseV2Order
```

Updates delivery tracking info for an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order ID
$v1OrderDeliveryTracking = new \EkmPHP\Models\V1OrderDeliveryTracking(); // \EkmPHP\Models\V1OrderDeliveryTracking | The delivery tracking info for an order

try {
    $result = $apiInstance->ordersUpdateDeliveryTracking($id, $v1OrderDeliveryTracking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersUpdateDeliveryTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID |
 **v1OrderDeliveryTracking** | [**\EkmPHP\Models\V1OrderDeliveryTracking**](../Model/V1OrderDeliveryTracking.md)| The delivery tracking info for an order | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV2Order**](../Model/TempestResponseV2Order.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersUpdateStatus()`

```php
ordersUpdateStatus($id, $v1OrderStatus): \EkmPHP\Models\TempestResponseV2Order
```

Updates the status of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order ID
$v1OrderStatus = new \EkmPHP\Models\V1OrderStatus(); // \EkmPHP\Models\V1OrderStatus | The updated order status

try {
    $result = $apiInstance->ordersUpdateStatus($id, $v1OrderStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID |
 **v1OrderStatus** | [**\EkmPHP\Models\V1OrderStatus**](../Model/V1OrderStatus.md)| The updated order status | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV2Order**](../Model/TempestResponseV2Order.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
