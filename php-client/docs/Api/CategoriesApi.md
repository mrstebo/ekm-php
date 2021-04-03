# Mrstebo\EkmPHP\CategoriesApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesCreate()**](CategoriesApi.md#categoriesCreate) | **POST** /api/v1/categories | Add a category
[**categoriesDelete()**](CategoriesApi.md#categoriesDelete) | **DELETE** /api/v1/categories/{id} | Delete a category
[**categoriesDeleteCategoryManaged()**](CategoriesApi.md#categoriesDeleteCategoryManaged) | **DELETE** /api/v1/categories/{id}/categorymanaged/{childCategoryId} | Stops a category from being managed by another category
[**categoriesGet()**](CategoriesApi.md#categoriesGet) | **GET** /api/v1/categories/{id} | Get a category
[**categoriesGetAll()**](CategoriesApi.md#categoriesGetAll) | **GET** /api/v1/categories | Get a paginated set of categories
[**categoriesGetCategoryFilters()**](CategoriesApi.md#categoriesGetCategoryFilters) | **GET** /api/v1/categories/{id}/filters | 
[**categoriesSearch()**](CategoriesApi.md#categoriesSearch) | **GET** /api/v1/categories/search | Searches categories based on search criteria
[**categoriesSetCategoryManaged()**](CategoriesApi.md#categoriesSetCategoryManaged) | **POST** /api/v1/categories/{id}/categorymanaged/{childCategoryId} | Set a category to be managed by another category
[**categoriesSubcategories()**](CategoriesApi.md#categoriesSubcategories) | **GET** /api/v1/categories/{id}/subcategories | Get a paginated set of subcategories
[**categoriesUpdate()**](CategoriesApi.md#categoriesUpdate) | **PUT** /api/v1/categories/{id} | Update a category
[**categoriesUpdateCategoryFilters()**](CategoriesApi.md#categoriesUpdateCategoryFilters) | **PUT** /api/v1/categories/{id}/filters | 


## `categoriesCreate()`

```php
categoriesCreate($v1AddCategory): \Mrstebo\EkmPHP\Models\TempestResponseV1Category
```

Add a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddCategory = new \Mrstebo\EkmPHP\Models\V1AddCategory(); // \Mrstebo\EkmPHP\Models\V1AddCategory

try {
    $result = $apiInstance->categoriesCreate($v1AddCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1AddCategory** | [**\Mrstebo\EkmPHP\Models\V1AddCategory**](../Model/V1AddCategory.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Category**](../Model/TempestResponseV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesDelete()`

```php
categoriesDelete($id): \Mrstebo\EkmPHP\Models\TempestResponseV1Category
```

Delete a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The category ID

try {
    $result = $apiInstance->categoriesDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The category ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Category**](../Model/TempestResponseV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesDeleteCategoryManaged()`

```php
categoriesDeleteCategoryManaged($id, $childCategoryId): \Mrstebo\EkmPHP\Models\TempestResponseV1SubCategory
```

Stops a category from being managed by another category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$childCategoryId = 56; // int

try {
    $result = $apiInstance->categoriesDeleteCategoryManaged($id, $childCategoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesDeleteCategoryManaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **childCategoryId** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1SubCategory**](../Model/TempestResponseV1SubCategory.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGet()`

```php
categoriesGet($id): \Mrstebo\EkmPHP\Models\TempestResponseV1Category
```

Get a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The category ID

try {
    $result = $apiInstance->categoriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The category ID |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Category**](../Model/TempestResponseV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGetAll()`

```php
categoriesGetAll($page, $limit): \Mrstebo\EkmPHP\Models\TempestResponseListV1Category
```

Get a paginated set of categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->categoriesGetAll($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Category**](../Model/TempestResponseListV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGetCategoryFilters()`

```php
categoriesGetCategoryFilters($id): \Mrstebo\EkmPHP\Models\TempestResponseV1CategoryFilters
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->categoriesGetCategoryFilters($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGetCategoryFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1CategoryFilters**](../Model/TempestResponseV1CategoryFilters.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesSearch()`

```php
categoriesSearch($page, $limit, $query, $orderby): \Mrstebo\EkmPHP\Models\TempestResponseListV1Category
```

Searches categories based on search criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)
$query = 'query_example'; // string | A <a href=\"#tag/OData\" target=\"_blank\">search</a> query e.g. live eq true
$orderby = 'orderby_example'; // string | Field to order results. Prefix with a - (dash) for descending e.g. -id

try {
    $result = $apiInstance->categoriesSearch($page, $limit, $query, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]
 **query** | **string**| A &lt;a href&#x3D;\&quot;#tag/OData\&quot; target&#x3D;\&quot;_blank\&quot;&gt;search&lt;/a&gt; query e.g. live eq true | [optional]
 **orderby** | **string**| Field to order results. Prefix with a - (dash) for descending e.g. -id | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1Category**](../Model/TempestResponseListV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesSetCategoryManaged()`

```php
categoriesSetCategoryManaged($id, $childCategoryId): \Mrstebo\EkmPHP\Models\TempestResponseV1SubCategory
```

Set a category to be managed by another category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$childCategoryId = 56; // int

try {
    $result = $apiInstance->categoriesSetCategoryManaged($id, $childCategoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesSetCategoryManaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **childCategoryId** | **int**|  |

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1SubCategory**](../Model/TempestResponseV1SubCategory.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesSubcategories()`

```php
categoriesSubcategories($id, $page, $limit): \Mrstebo\EkmPHP\Models\TempestResponseListV1SubCategory
```

Get a paginated set of subcategories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$page = 56; // int | Page number to display
$limit = 56; // int | Items per page (maximum 20)

try {
    $result = $apiInstance->categoriesSubcategories($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesSubcategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Page number to display | [optional]
 **limit** | **int**| Items per page (maximum 20) | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseListV1SubCategory**](../Model/TempestResponseListV1SubCategory.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesUpdate()`

```php
categoriesUpdate($id, $v1UpdateCategory): \Mrstebo\EkmPHP\Models\TempestResponseV1Category
```

Update a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The category ID
$v1UpdateCategory = new \Mrstebo\EkmPHP\Models\V1UpdateCategory(); // \Mrstebo\EkmPHP\Models\V1UpdateCategory

try {
    $result = $apiInstance->categoriesUpdate($id, $v1UpdateCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The category ID |
 **v1UpdateCategory** | [**\Mrstebo\EkmPHP\Models\V1UpdateCategory**](../Model/V1UpdateCategory.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Category**](../Model/TempestResponseV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesUpdateCategoryFilters()`

```php
categoriesUpdateCategoryFilters($id, $v1CategoryFilters): \Mrstebo\EkmPHP\Models\TempestResponseV1Category
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$v1CategoryFilters = new \Mrstebo\EkmPHP\Models\V1CategoryFilters(); // \Mrstebo\EkmPHP\Models\V1CategoryFilters

try {
    $result = $apiInstance->categoriesUpdateCategoryFilters($id, $v1CategoryFilters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesUpdateCategoryFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **v1CategoryFilters** | [**\Mrstebo\EkmPHP\Models\V1CategoryFilters**](../Model/V1CategoryFilters.md)|  | [optional]

### Return type

[**\Mrstebo\EkmPHP\Models\TempestResponseV1Category**](../Model/TempestResponseV1Category.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
