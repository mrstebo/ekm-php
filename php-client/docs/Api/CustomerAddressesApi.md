# Mrstebo\EkmPHP\CustomerAddressesApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAddressesCreate()**](CustomerAddressesApi.md#customerAddressesCreate) | **POST** /api/v1/customers/{customerId}/addresses | Add a Customer Address
[**customerAddressesDelete()**](CustomerAddressesApi.md#customerAddressesDelete) | **DELETE** /api/v1/customers/{customerId}/addresses/{addressId} | Delete a Customer Address
[**customerAddressesGetAll()**](CustomerAddressesApi.md#customerAddressesGetAll) | **GET** /api/v1/customers/{customerId}/addresses | Get a paginated set of Customer Addresses
[**customerAddressesGetById()**](CustomerAddressesApi.md#customerAddressesGetById) | **GET** /api/v1/customers/{customerId}/addresses/{addressId} | Get a single Customer Address by Id
[**customerAddressesSearch()**](CustomerAddressesApi.md#customerAddressesSearch) | **GET** /api/v1/customers/{customerId}/addresses/search | Searches customer addresses based on search criteria
[**customerAddressesUpdate()**](CustomerAddressesApi.md#customerAddressesUpdate) | **PUT** /api/v1/customers/{customerId}/addresses/{addressId} | Update a Customer Address


## `customerAddressesCreate()`

```php
customerAddressesCreate($customerId, $v1CustomerAddress): \Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress
```

Add a Customer Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$v1CustomerAddress = new \Mrstebo\EkmPHP\Models\V1CustomerAddress(); // \Mrstebo\EkmPHP\Models\V1CustomerAddress

try {
    $result = $apiInstance->customerAddressesCreate($customerId, $v1CustomerAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **v1CustomerAddress** | [**\Mrstebo\EkmPHP\Models\V1CustomerAddress**](../Model/V1CustomerAddress.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress**](../Model/TempestResponseV1CustomerAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesDelete()`

```php
customerAddressesDelete($customerId, $addressId): \Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress
```

Delete a Customer Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$addressId = 56; // int | The Address Id

try {
    $result = $apiInstance->customerAddressesDelete($customerId, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **addressId** | **int**| The Address Id |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress**](../Model/TempestResponseV1CustomerAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesGetAll()`

```php
customerAddressesGetAll($customerId, $page, $limit): \Mrstebo\EkmPHP\Models\TempestResponseListV1CustomerAddress
```

Get a paginated set of Customer Addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->customerAddressesGetAll($customerId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1CustomerAddress**](../Model/TempestResponseListV1CustomerAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesGetById()`

```php
customerAddressesGetById($customerId, $addressId): \Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress
```

Get a single Customer Address by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$addressId = 56; // int | The Address Id

try {
    $result = $apiInstance->customerAddressesGetById($customerId, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **addressId** | **int**| The Address Id |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1CustomerAddress**](../Model/TempestResponseV1CustomerAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesSearch()`

```php
customerAddressesSearch($customerId, $query, $page, $limit, $orderby): \Mrstebo\EkmPHP\Models\TempestResponseListV1CustomerAddress
```

Searches customer addresses based on search criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$query = 'query_example'; // string | A <a href=\"#tag/OData\" target=\"_blank\">search</a> query e.g. email_address eq 'test@ekm.com'
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)
$orderby = 'orderby_example'; // string | Field to order results. Prefix with a - (dash) for descending e.g. -id

try {
    $result = $apiInstance->customerAddressesSearch($customerId, $query, $page, $limit, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **query** | **string**| A &lt;a href&#x3D;\&quot;#tag/OData\&quot; target&#x3D;\&quot;_blank\&quot;&gt;search&lt;/a&gt; query e.g. email_address eq &#39;test@ekm.com&#39; |
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]
 **orderby** | **string**| Field to order results. Prefix with a - (dash) for descending e.g. -id | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1CustomerAddress**](../Model/TempestResponseListV1CustomerAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesUpdate()`

```php
customerAddressesUpdate($customerId, $addressId, $v1CustomerAddress): \Mrstebo\EkmPHP\Models\TempestResponseV1Customer
```

Update a Customer Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The Customer Id
$addressId = 56; // int | The Address Id
$v1CustomerAddress = new \Mrstebo\EkmPHP\Models\V1CustomerAddress(); // \Mrstebo\EkmPHP\Models\V1CustomerAddress

try {
    $result = $apiInstance->customerAddressesUpdate($customerId, $addressId, $v1CustomerAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The Customer Id |
 **addressId** | **int**| The Address Id |
 **v1CustomerAddress** | [**\Mrstebo\EkmPHP\Models\V1CustomerAddress**](../Model/V1CustomerAddress.md)|  | [optional]

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
