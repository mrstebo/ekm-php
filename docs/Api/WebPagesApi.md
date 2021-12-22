# EkmPHP\WebPagesApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webPagesCreate()**](WebPagesApi.md#webPagesCreate) | **POST** /api/v1/web_pages | Create a web page
[**webPagesDelete()**](WebPagesApi.md#webPagesDelete) | **DELETE** /api/v1/web_pages/{id} | Delete a web page by ID
[**webPagesGet()**](WebPagesApi.md#webPagesGet) | **GET** /api/v1/web_pages/{id} | Get a web page
[**webPagesGetAll()**](WebPagesApi.md#webPagesGetAll) | **GET** /api/v1/web_pages | Get a paginated set of web pages
[**webPagesUpdate()**](WebPagesApi.md#webPagesUpdate) | **PUT** /api/v1/web_pages/{id} | Update a specified web page


## `webPagesCreate()`

```php
webPagesCreate($v1AddWebPage): \EkmPHP\Models\TempestResponseV1WebPage
```

Create a web page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddWebPage = new \EkmPHP\Models\V1AddWebPage(); // \EkmPHP\Models\V1AddWebPage

try {
    $result = $apiInstance->webPagesCreate($v1AddWebPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->webPagesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1AddWebPage** | [**\EkmPHP\Models\V1AddWebPage**](../Model/V1AddWebPage.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPage**](../Model/TempestResponseV1WebPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPagesDelete()`

```php
webPagesDelete($id): \EkmPHP\Models\TempestResponseV1WebPage
```

Delete a web page by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the web page to be deleted

try {
    $result = $apiInstance->webPagesDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->webPagesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the web page to be deleted |

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPage**](../Model/TempestResponseV1WebPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPagesGet()`

```php
webPagesGet($id): \EkmPHP\Models\TempestResponseV1WebPage
```

Get a web page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The web page ID

try {
    $result = $apiInstance->webPagesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->webPagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The web page ID |

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPage**](../Model/TempestResponseV1WebPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPagesGetAll()`

```php
webPagesGetAll($page, $limit): \EkmPHP\Models\TempestResponseListV1WebPage
```

Get a paginated set of web pages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->webPagesGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->webPagesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseListV1WebPage**](../Model/TempestResponseListV1WebPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webPagesUpdate()`

```php
webPagesUpdate($id, $v1UpdateWebPage): \EkmPHP\Models\TempestResponseV1WebPage
```

Update a specified web page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The web page ID
$v1UpdateWebPage = new \EkmPHP\Models\V1UpdateWebPage(); // \EkmPHP\Models\V1UpdateWebPage

try {
    $result = $apiInstance->webPagesUpdate($id, $v1UpdateWebPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->webPagesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The web page ID |
 **v1UpdateWebPage** | [**\EkmPHP\Models\V1UpdateWebPage**](../Model/V1UpdateWebPage.md)|  | [optional]

### Return type

[**\EkmPHP\Models\TempestResponseV1WebPage**](../Model/TempestResponseV1WebPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
