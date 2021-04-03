# Mrstebo\EkmPHP\CustomersApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCreate()**](CustomersApi.md#customersCreate) | **POST** /api/v1/customers | Add a customer
[**customersDelete()**](CustomersApi.md#customersDelete) | **DELETE** /api/v1/customers/{id} | Delete a Customer
[**customersGetAll()**](CustomersApi.md#customersGetAll) | **GET** /api/v1/customers | Get a paginated set of Customers
[**customersGetById()**](CustomersApi.md#customersGetById) | **GET** /api/v1/customers/{id} | Get a single Customer by Id
[**customersSearch()**](CustomersApi.md#customersSearch) | **GET** /api/v1/customers/search | Searches customers based on search criteria
[**customersUpdate()**](CustomersApi.md#customersUpdate) | **PUT** /api/v1/customers/{id} | Update a Customer


## `customersCreate()`

```php
customersCreate($v1AddCustomer): \Mrstebo\EkmPHP\Models\TempestResponseV1Customer
```

Add a customer

Note: setting send_email to true will send an email to the customer prompting them to create a password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddCustomer = new \Mrstebo\EkmPHP\Models\V1AddCustomer(); // \Mrstebo\EkmPHP\Models\V1AddCustomer

try {
    $result = $apiInstance->customersCreate($v1AddCustomer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1AddCustomer** | [**\Mrstebo\EkmPHP\Models\V1AddCustomer**](../Model/V1AddCustomer.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Customer**](../Model/TempestResponseV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersDelete()`

```php
customersDelete($id): \Mrstebo\EkmPHP\Models\TempestResponseV1Customer
```

Delete a Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->customersDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Customer**](../Model/TempestResponseV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetAll()`

```php
customersGetAll($page, $limit): \Mrstebo\EkmPHP\Models\TempestResponseListV1Customer
```

Get a paginated set of Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->customersGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Customer**](../Model/TempestResponseListV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetById()`

```php
customersGetById($id): \Mrstebo\EkmPHP\Models\TempestResponseV1Customer
```

Get a single Customer by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Customers Id

try {
    $result = $apiInstance->customersGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Customers Id |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Customer**](../Model/TempestResponseV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersSearch()`

```php
customersSearch($page, $limit, $query, $orderby): \Mrstebo\EkmPHP\Models\TempestResponseListV1Customer
```

Searches customers based on search criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)
$query = 'query_example'; // string | A <a href=\"#tag/OData\" target=\"_blank\">search</a> query e.g. email_address eq 'test@ekm.com'
$orderby = 'orderby_example'; // string | Field to order results. Prefix with a - (dash) for descending e.g. -id

try {
    $result = $apiInstance->customersSearch($page, $limit, $query, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]
 **query** | **string**| A &lt;a href&#x3D;\&quot;#tag/OData\&quot; target&#x3D;\&quot;_blank\&quot;&gt;search&lt;/a&gt; query e.g. email_address eq &#39;test@ekm.com&#39; | [optional]
 **orderby** | **string**| Field to order results. Prefix with a - (dash) for descending e.g. -id | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Customer**](../Model/TempestResponseListV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersUpdate()`

```php
customersUpdate($id, $v1UpdateCustomer): \Mrstebo\EkmPHP\Models\TempestResponseV1Customer
```

Update a Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$v1UpdateCustomer = new \Mrstebo\EkmPHP\Models\V1UpdateCustomer(); // \Mrstebo\EkmPHP\Models\V1UpdateCustomer

try {
    $result = $apiInstance->customersUpdate($id, $v1UpdateCustomer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **v1UpdateCustomer** | [**\Mrstebo\EkmPHP\Models\V1UpdateCustomer**](../Model/V1UpdateCustomer.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Customer**](../Model/TempestResponseV1Customer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
