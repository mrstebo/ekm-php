<?php
/**
 * ProductVariantStockApi
 * PHP version 7.3
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EKM Partner API
 *
 * Our new API allows partners to build significantly better integrations with the EKM platform.    To try out the below endpoints, or for full up to date representations of the request / response models, please see the [swagger page](https://api.ekm.net/swagger/index.html). (We display examples here, but the swagger page is guaranteed to show the complete model.)    To keep up to date with the latest updates, please see our [RSS feed](https://partners.ekm.net/ChangeLog/Feed) or the [partner dashboard](https://partners.ekm.net/).
 *
 * The version of the OpenAPI document: Latest
 * Contact: api-support@ekm.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EkmPHP\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EkmPHP\ApiException;
use EkmPHP\Configuration;
use EkmPHP\HeaderSelector;
use EkmPHP\ObjectSerializer;

/**
 * ProductVariantStockApi Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductVariantStockApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation productVariantStockGet
     *
     * Get a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     *
     * @throws \EkmPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseTempestValidationError
     */
    public function productVariantStockGet($id, $variantId)
    {
        list($response) = $this->productVariantStockGetWithHttpInfo($id, $variantId);
        return $response;
    }

    /**
     * Operation productVariantStockGetWithHttpInfo
     *
     * Get a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     *
     * @throws \EkmPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseTempestValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function productVariantStockGetWithHttpInfo($id, $variantId)
    {
        $request = $this->productVariantStockGetRequest($id, $variantId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EkmPHP\Models\TempestResponseV1ProductVariantStock' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EkmPHP\Models\TempestResponseV1ProductVariantStock', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\EkmPHP\Models\TempestResponseTempestValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EkmPHP\Models\TempestResponseTempestValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EkmPHP\Models\TempestResponseV1ProductVariantStock';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EkmPHP\Models\TempestResponseV1ProductVariantStock',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EkmPHP\Models\TempestResponseTempestValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation productVariantStockGetAsync
     *
     * Get a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productVariantStockGetAsync($id, $variantId)
    {
        return $this->productVariantStockGetAsyncWithHttpInfo($id, $variantId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productVariantStockGetAsyncWithHttpInfo
     *
     * Get a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productVariantStockGetAsyncWithHttpInfo($id, $variantId)
    {
        $returnType = '\EkmPHP\Models\TempestResponseV1ProductVariantStock';
        $request = $this->productVariantStockGetRequest($id, $variantId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'productVariantStockGet'
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function productVariantStockGetRequest($id, $variantId)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling productVariantStockGet'
            );
        }
        // verify the required parameter 'variantId' is set
        if ($variantId === null || (is_array($variantId) && count($variantId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variantId when calling productVariantStockGet'
            );
        }

        $resourcePath = '/api/v1/products/{id}/variants/{variantId}/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($variantId !== null) {
            $resourcePath = str_replace(
                '{' . 'variantId' . '}',
                ObjectSerializer::toPathValue($variantId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation productVariantStockUpdate
     *
     * Update a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     * @param  \EkmPHP\Models\V1ProductVariantStock $v1ProductVariantStock v1ProductVariantStock (optional)
     *
     * @throws \EkmPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseTempestValidationError
     */
    public function productVariantStockUpdate($id, $variantId, $v1ProductVariantStock = null)
    {
        list($response) = $this->productVariantStockUpdateWithHttpInfo($id, $variantId, $v1ProductVariantStock);
        return $response;
    }

    /**
     * Operation productVariantStockUpdateWithHttpInfo
     *
     * Update a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     * @param  \EkmPHP\Models\V1ProductVariantStock $v1ProductVariantStock (optional)
     *
     * @throws \EkmPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseV1ProductVariantStock|\EkmPHP\Models\TempestResponseTempestValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function productVariantStockUpdateWithHttpInfo($id, $variantId, $v1ProductVariantStock = null)
    {
        $request = $this->productVariantStockUpdateRequest($id, $variantId, $v1ProductVariantStock);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EkmPHP\Models\TempestResponseV1ProductVariantStock' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EkmPHP\Models\TempestResponseV1ProductVariantStock', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EkmPHP\Models\TempestResponseV1ProductVariantStock' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EkmPHP\Models\TempestResponseV1ProductVariantStock', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\EkmPHP\Models\TempestResponseTempestValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EkmPHP\Models\TempestResponseTempestValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EkmPHP\Models\TempestResponseV1ProductVariantStock';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EkmPHP\Models\TempestResponseV1ProductVariantStock',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EkmPHP\Models\TempestResponseV1ProductVariantStock',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EkmPHP\Models\TempestResponseTempestValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation productVariantStockUpdateAsync
     *
     * Update a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     * @param  \EkmPHP\Models\V1ProductVariantStock $v1ProductVariantStock (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productVariantStockUpdateAsync($id, $variantId, $v1ProductVariantStock = null)
    {
        return $this->productVariantStockUpdateAsyncWithHttpInfo($id, $variantId, $v1ProductVariantStock)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productVariantStockUpdateAsyncWithHttpInfo
     *
     * Update a product variant stock
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     * @param  \EkmPHP\Models\V1ProductVariantStock $v1ProductVariantStock (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productVariantStockUpdateAsyncWithHttpInfo($id, $variantId, $v1ProductVariantStock = null)
    {
        $returnType = '\EkmPHP\Models\TempestResponseV1ProductVariantStock';
        $request = $this->productVariantStockUpdateRequest($id, $variantId, $v1ProductVariantStock);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'productVariantStockUpdate'
     *
     * @param  int $id The product ID (required)
     * @param  int $variantId The varaint ID (required)
     * @param  \EkmPHP\Models\V1ProductVariantStock $v1ProductVariantStock (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function productVariantStockUpdateRequest($id, $variantId, $v1ProductVariantStock = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling productVariantStockUpdate'
            );
        }
        // verify the required parameter 'variantId' is set
        if ($variantId === null || (is_array($variantId) && count($variantId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variantId when calling productVariantStockUpdate'
            );
        }

        $resourcePath = '/api/v1/products/{id}/variants/{variantId}/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($variantId !== null) {
            $resourcePath = str_replace(
                '{' . 'variantId' . '}',
                ObjectSerializer::toPathValue($variantId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($v1ProductVariantStock)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($v1ProductVariantStock));
            } else {
                $httpBody = $v1ProductVariantStock;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
