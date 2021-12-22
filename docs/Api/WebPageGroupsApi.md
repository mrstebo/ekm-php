# EkmPHP\WebPageGroupsApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webPageGroupsCreate()**](WebPageGroupsApi.md#webPageGroupsCreate) | **POST** /api/v1/web_page_groups | Create a web page group
[**webPageGroupsDelete()**](WebPageGroupsApi.md#webPageGroupsDelete) | **DELETE** /api/v1/web_page_groups/{id} | Delete a web page group
[**webPageGroupsGet()**](WebPageGroupsApi.md#webPageGroupsGet) | **GET** /api/v1/web_page_groups/{id} | Get a web page group
[**webPageGroupsGetAll()**](WebPageGroupsApi.md#webPageGroupsGetAll) | **GET** /api/v1/web_page_groups | Get a paginated set of web page groups
[**webPageGroupsUpdate()**](WebPageGroupsApi.md#webPageGroupsUpdate) | **PUT** /api/v1/web_page_groups/{id} | Update a specified web page group


## `webPageGroupsCreate()`

```php
webPageGroupsCreate($v1AddWebPageGroup): \EkmPHP\Models\TempestResponseV1WebPageGroup
```

Create a web page group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPageGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddWebPageGroup = new \EkmPHP\Models\V1AddWebPageGroup(); // \EkmPHP\Models\V1AddWebPageGroup

try {
    $result = $apiInstance->webPageGroupsCreate($v1AddWebPageGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageGroupsApi->webPageGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1AddWebPageGroup** | [**\EkmPHP\Models\V1AddWebPageGroup**](../Model/V1AddWebPageGroup.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPageGroup**](../Model/TempestResponseV1WebPageGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPageGroupsDelete()`

```php
webPageGroupsDelete($id): \EkmPHP\Models\TempestResponseV1WebPageGroup
```

Delete a web page group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPageGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Id of the web page group to be deleted

try {
    $result = $apiInstance->webPageGroupsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageGroupsApi->webPageGroupsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Id of the web page group to be deleted |

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPageGroup**](../Model/TempestResponseV1WebPageGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPageGroupsGet()`

```php
webPageGroupsGet($id): \EkmPHP\Models\TempestResponseV1WebPageGroup
```

Get a web page group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPageGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The web page group ID

try {
    $result = $apiInstance->webPageGroupsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageGroupsApi->webPageGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The web page group ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPageGroup**](../Model/TempestResponseV1WebPageGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPageGroupsGetAll()`

```php
webPageGroupsGetAll($page, $limit): \EkmPHP\Models\TempestResponseListV1WebPageGroup
```

Get a paginated set of web page groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPageGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->webPageGroupsGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageGroupsApi->webPageGroupsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseListV1WebPageGroup**](../Model/TempestResponseListV1WebPageGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPageGroupsUpdate()`

```php
webPageGroupsUpdate($id, $v1UpdateWebPageGroup): \EkmPHP\Models\TempestResponseV1WebPageGroup
```

Update a specified web page group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPageGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The web page group ID
$v1UpdateWebPageGroup = new \EkmPHP\Models\V1UpdateWebPageGroup(); // \EkmPHP\Models\V1UpdateWebPageGroup

try {
    $result = $apiInstance->webPageGroupsUpdate($id, $v1UpdateWebPageGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageGroupsApi->webPageGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The web page group ID |
 **v1UpdateWebPageGroup** | [**\EkmPHP\Models\V1UpdateWebPageGroup**](../Model/V1UpdateWebPageGroup.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPageGroup**](../Model/TempestResponseV1WebPageGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
