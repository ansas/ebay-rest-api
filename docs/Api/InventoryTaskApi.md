# Ansas\Ebay\InventoryTaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryTask()**](InventoryTaskApi.md#createInventoryTask) | **POST** /inventory_task | 
[**getInventoryTask()**](InventoryTaskApi.md#getInventoryTask) | **GET** /inventory_task/{task_id} | 
[**getInventoryTasks()**](InventoryTaskApi.md#getInventoryTasks) | **GET** /inventory_task | 


## `createInventoryTask()`

```php
createInventoryTask($createInventoryTaskRequest, $xEBAYCMARKETPLACEID)
```



This method creates an inventory-related download task for a specified feed type with optional filter criteria. When using this method, specify the feedType. This method returns the location response header containing the getInventoryTask call URI to retrieve the inventory task you just created. The URL includes the eBay-assigned task ID, which you can use to reference the inventory task. To retrieve the status of the task, use the getInventoryTask method to retrieve a single task ID or the getInventoryTasks method to retrieve multiple task IDs. Note: The scope depends on the feed type. An error message results when an unsupported scope or feed type is specified.Presently, this method supports Active Inventory Report. The ActiveInventoryReport returns a report that contains price and quantity information for all of the active listings for a specific seller. A seller can use this information to maintain their inventory on eBay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\InventoryTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createInventoryTaskRequest = new \Ansas\Ebay\Model\CreateInventoryTaskRequest(); // \Ansas\Ebay\Model\CreateInventoryTaskRequest | The request payload containing the version, feedType, and optional filterCriteria.
$xEBAYCMARKETPLACEID = 'xEBAYCMARKETPLACEID_example'; // string | The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID:EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum.

try {
    $apiInstance->createInventoryTask($createInventoryTaskRequest, $xEBAYCMARKETPLACEID);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTaskApi->createInventoryTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createInventoryTaskRequest** | [**\Ansas\Ebay\Model\CreateInventoryTaskRequest**](../Model/CreateInventoryTaskRequest.md)| The request payload containing the version, feedType, and optional filterCriteria. |
 **xEBAYCMARKETPLACEID** | **string**| The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID:EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum. | [optional]

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

## `getInventoryTask()`

```php
getInventoryTask($taskId): \Ansas\Ebay\Model\InventoryTask
```



This method retrieves the task details and status of the specified inventory-related task. The input is task_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\InventoryTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | The ID of the task. This ID was generated when the task was created by the createInventoryTask method

try {
    $result = $apiInstance->getInventoryTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTaskApi->getInventoryTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| The ID of the task. This ID was generated when the task was created by the createInventoryTask method |

### Return type

[**\Ansas\Ebay\Model\InventoryTask**](../Model/InventoryTask.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryTasks()`

```php
getInventoryTasks($feedType, $scheduleId, $lookBackDays, $dateRange, $limit, $offset): \Ansas\Ebay\Model\InventoryTaskCollection
```



This method searches for multiple tasks of a specific feed type, and includes date filters and pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Ansas\Ebay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ansas\Ebay\Api\InventoryTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedType = 'feedType_example'; // string | The feed type associated with the inventory task. Either feed_type or schedule_id is required. Do not use with the schedule_id parameter. Presently, only one feed type is available: LMS_ACTIVE_INVENTORY_REPORT
$scheduleId = 'scheduleId_example'; // string | The ID of the schedule for which to retrieve the latest result file. This ID is generated when the schedule was created by the createSchedule method. Schedules apply to downloaded reports (LMS_ACTIVE_INVENTORY_REPORT). Either schedule_id or feed_type is required. Do not use with the feed_type parameter.
$lookBackDays = 'lookBackDays_example'; // string | The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default: 7 Range: 1-90 (inclusive)
$dateRange = 'dateRange_example'; // string | Specifies the range of task creation dates used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Note: Maximum date range window size is 90 days. Valid Format (UTC): yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ For example: Tasks created on March 31, 2021 2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z
$limit = 'limit_example'; // string | The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500
$offset = 'offset_example'; // string | The number of tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0

try {
    $result = $apiInstance->getInventoryTasks($feedType, $scheduleId, $lookBackDays, $dateRange, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTaskApi->getInventoryTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedType** | **string**| The feed type associated with the inventory task. Either feed_type or schedule_id is required. Do not use with the schedule_id parameter. Presently, only one feed type is available: LMS_ACTIVE_INVENTORY_REPORT | [optional]
 **scheduleId** | **string**| The ID of the schedule for which to retrieve the latest result file. This ID is generated when the schedule was created by the createSchedule method. Schedules apply to downloaded reports (LMS_ACTIVE_INVENTORY_REPORT). Either schedule_id or feed_type is required. Do not use with the feed_type parameter. | [optional]
 **lookBackDays** | **string**| The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter&#39;s default value is used. Default: 7 Range: 1-90 (inclusive) | [optional]
 **dateRange** | **string**| Specifies the range of task creation dates used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Note: Maximum date range window size is 90 days. Valid Format (UTC): yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ For example: Tasks created on March 31, 2021 2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z | [optional]
 **limit** | **string**| The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500 | [optional]
 **offset** | **string**| The number of tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0 | [optional]

### Return type

[**\Ansas\Ebay\Model\InventoryTaskCollection**](../Model/InventoryTaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
