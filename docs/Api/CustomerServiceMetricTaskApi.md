# Ansas\Ebay\CustomerServiceMetricTaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#createCustomerServiceMetricTask) | **POST** /customer_service_metric_task | 
[**getCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTask) | **GET** /customer_service_metric_task/{task_id} | 
[**getCustomerServiceMetricTasks()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTasks) | **GET** /customer_service_metric_task | 


## `createCustomerServiceMetricTask()`

```php
createCustomerServiceMetricTask($acceptLanguage, $createServiceMetricsTaskRequest)
```



Use this method to create a customer service metrics download task with filter criteria for the customer service metrics report. When using this method, specify the feedType and filterCriteria including both evaluationMarketplaceId and customerServiceMetricType for the report. The method returns the location response header containing the call URI to use with getCustomerServiceMetricTask to retrieve status and details on the task. Only CURRENT Customer Service Metrics reports can be generated with the Sell Feed API. PROJECTED reports are not supported at this time. See the getCustomerServiceMetric method document in the Analytics API for more information about these two types of reports. Note: Before calling this API, retrieve the summary of the seller's performance and rating for the customer service metric by calling getCustomerServiceMetric (part of the Analytics API). You can then populate the create task request fields with the values from the response. This technique eliminates failed tasks that request a report for a customerServiceMetricType and evaluationMarketplaceId that are without evaluation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acceptLanguage = 'acceptLanguage_example'; // string | Use this header to specify the natural language in which the authenticated user desires the response.
$createServiceMetricsTaskRequest = new \Ansas\Ebay\Model\CreateServiceMetricsTaskRequest(); // \Ansas\Ebay\Model\CreateServiceMetricsTaskRequest | Request payload containing version, feedType, and optional filterCriteria.

try {
    $apiInstance->createCustomerServiceMetricTask($acceptLanguage, $createServiceMetricsTaskRequest);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->createCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acceptLanguage** | **string**| Use this header to specify the natural language in which the authenticated user desires the response. |
 **createServiceMetricsTaskRequest** | [**\Ansas\Ebay\Model\CreateServiceMetricsTaskRequest**](../Model/CreateServiceMetricsTaskRequest.md)| Request payload containing version, feedType, and optional filterCriteria. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTask()`

```php
getCustomerServiceMetricTask($taskId): \Ansas\Ebay\Model\ServiceMetricsTask
```



Use this method to retrieve customer service metric task details for the specified task. The input is task_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | Use this path parameter to specify the task ID value for the customer service metric task to retrieve.

try {
    $result = $apiInstance->getCustomerServiceMetricTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Use this path parameter to specify the task ID value for the customer service metric task to retrieve. |

### Return type

[**\Ansas\Ebay\Model\ServiceMetricsTask**](../Model/ServiceMetricsTask.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTasks()`

```php
getCustomerServiceMetricTasks($dateRange, $feedType, $limit, $lookBackDays, $offset): \Ansas\Ebay\Model\CustomerServiceMetricTaskCollection
```



Use this method to return an array of customer service metric tasks. You can limit the tasks returned by specifying a date range. Note: You can pass in either the look_back_days or date_range, but not both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dateRange = 'dateRange_example'; // string | The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on March 8, 2020 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z Maximum: 90 days
$feedType = 'feedType_example'; // string | The feed type associated with the task. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT.
$limit = 'limit_example'; // string | The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note:This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10 Maximum: 500
$lookBackDays = 'lookBackDays_example'; // string | The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default value: 7 Range: 1-90 (inclusive)
$offset = 'offset_example'; // string | The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0

try {
    $result = $apiInstance->getCustomerServiceMetricTasks($dateRange, $feedType, $limit, $lookBackDays, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateRange** | **string**| The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on March 8, 2020 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z Maximum: 90 days | [optional]
 **feedType** | **string**| The feed type associated with the task. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT. | [optional]
 **limit** | **string**| The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note:This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10 Maximum: 500 | [optional]
 **lookBackDays** | **string**| The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter&#39;s default value is used. Default value: 7 Range: 1-90 (inclusive) | [optional]
 **offset** | **string**| The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 | [optional]

### Return type

[**\Ansas\Ebay\Model\CustomerServiceMetricTaskCollection**](../Model/CustomerServiceMetricTaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
