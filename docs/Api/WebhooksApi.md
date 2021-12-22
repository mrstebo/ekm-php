# EkmPHP\WebhooksApi

All URIs are relative to https://api.ekm.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksDelete()**](WebhooksApi.md#webhooksDelete) | **DELETE** /api/v2/Webhooks/{id} | Unsubscribe from a webhook
[**webhooksGet()**](WebhooksApi.md#webhooksGet) | **GET** /api/v2/Webhooks/{id} | Get a specific subscription
[**webhooksGetAll()**](WebhooksApi.md#webhooksGetAll) | **GET** /api/v2/Webhooks/webhooks | Get list of existing subscriptions
[**webhooksPost()**](WebhooksApi.md#webhooksPost) | **POST** /api/v2/Webhooks | Subscribe to a webhook
[**webhooksPut()**](WebhooksApi.md#webhooksPut) | **PUT** /api/v2/Webhooks/{id} | Update a webhook subscription


## `webhooksDelete()`

```php
webhooksDelete($id)
```

Unsubscribe from a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the subscription to delete

try {
    $apiInstance->webhooksDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the subscription to delete |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksGet()`

```php
webhooksGet($id): \EkmPHP\Models\TempestResponseV2WebhookSubscription
```

Get a specific subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the subscription to get

try {
    $result = $apiInstance->webhooksGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the subscription to get |

### Return type

[**\EkmPHP\Models\TempestResponseV2WebhookSubscription**](../Model/TempestResponseV2WebhookSubscription.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksGetAll()`

```php
webhooksGetAll(): \EkmPHP\Models\TempestResponseListV2WebhookSubscription
```

Get list of existing subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhooksGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EkmPHP\Models\TempestResponseListV2WebhookSubscription**](../Model/TempestResponseListV2WebhookSubscription.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPost()`

```php
webhooksPost($v2AddWebhookSubscription)
```

Subscribe to a webhook

Webhooks allow an application to subscribe to events (topics) that happen on a Merchant's shop. This mechanism allows the application to *react* to those events without continually polling the API.    Currently we offer the following topics:   | Friendly Name | Topic Name | Topic Description | |:-------------:|:----------:|-------------------| |Order Created|order.created|This event is fired whenever a Shopper passes completely through the checkout process.| |Order Updated|order.updated|This event is fired whenever an order is updated (e.g. orders totals have changed) |   In order to subscribe to a webhook. A `POST` request should be made to the endpoint (/api/v2/webhooks) with the following JSON body:    `{ 'topic': '<webhookTopic>', 'endpoint': '<https://your.endpoint/path>', 'is_enabled': true }`    Then when an event occurs on the store that matches the criteria for the topic, your endpoint will recieve a `POST` with the following JSON body:    `{ 'username': '<merchantUsername>', 'topic': '<webhookTopic>', entity_id: '<entityId>' }`    | Field | Description |  |:-----|:-----------|  | merchantUsername | The username of the merchant (identifying which merchant this event belongs to). The username can be found in the `sub` property of the bearer token. Bearer tokens are standard JSON Web Tokens, further information can be found at [jwt.io](https://jwt.io)|  | webhookTopic | One of the events/topics listed above which caused the event to fire. |  | entityId | An entity Id relevant to the topic of this event. E.g. For the `order.created` event, this would be the id of the order that was created. |    ## Timeouts  When sending an event, we will wait for 5 seconds.   This may sound like a long time, but this includes the network latency between your application and the API.  Best practice suggests that you should queue messages and respond immediately with a 200 OK response.   Only after sending the response should you begin to process the events from your queue.    ## Duplicates  Please be aware that we will potentially send duplicate events. It is left as a task for the application implementer to deal with these duplicates.    ## Retries  If we fail to receive a 200 OK response within 5 seconds of sending the event, we will attempt to resend the event 20 times with an exponential delay between retries.    The formula used to calculate the delay is as follows:    `function getDelay(n) { let result = 200; for(var i = 0; i < n; i++) { result *= 1.97; } return result; }`    | Retry Count | Delay in milliseconds | Friendly Delay |  |:-----------:|:---------------------:|:--------------:|  | 1 | 200 | 200 ms |  | 2 | 394 | 394 ms |  | 3 | 776.18 | 776 ms |  | 4 | 1529.07 | 1.5 seconds |  | ... | ... | ... |  | 18 | 20274765.527682442 | 5 hours |   | 19 | 39941288.08953441 | 11 hours |  | 20 | 78684337.53638278 | 21 hours |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v2AddWebhookSubscription = new \EkmPHP\Models\V2AddWebhookSubscription(); // \EkmPHP\Models\V2AddWebhookSubscription | The subscription to be added

try {
    $apiInstance->webhooksPost($v2AddWebhookSubscription);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v2AddWebhookSubscription** | [**\EkmPHP\Models\V2AddWebhookSubscription**](../Model/V2AddWebhookSubscription.md)| The subscription to be added | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPut()`

```php
webhooksPut($id, $v2UpdateWebhookSubscription)
```

Update a webhook subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Bearer
$config = EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EkmPHP\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the subscription to updated
$v2UpdateWebhookSubscription = new \EkmPHP\Models\V2UpdateWebhookSubscription(); // \EkmPHP\Models\V2UpdateWebhookSubscription | The subscription to be updated

try {
    $apiInstance->webhooksPut($id, $v2UpdateWebhookSubscription);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the subscription to updated |
 **v2UpdateWebhookSubscription** | [**\EkmPHP\Models\V2UpdateWebhookSubscription**](../Model/V2UpdateWebhookSubscription.md)| The subscription to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
