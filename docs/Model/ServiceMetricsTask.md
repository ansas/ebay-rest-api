# # ServiceMetricsTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completionDate** | **string** | The timestamp when the customer service metrics task went into the COMPLETED or COMPLETED_WITH_ERROR state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller&amp;rsquo;s filter criteria, and the seller can run a getResultFile call to download the report. | [optional]
**creationDate** | **string** | The date the customer service metrics task was created. | [optional]
**detailHref** | **string** | The relative getCustomerServiceMetricTask call URI path to retrieve the corresponding task. | [optional]
**feedType** | **string** | The feed type associated with the task. | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\CustomerServiceMetricsFilterCriteria**](CustomerServiceMetricsFilterCriteria.md) |  | [optional]
**schemaVersion** | **string** | The schema version number of the file format. If omitted, the default value is used. Default value: 1.0 | [optional]
**status** | **string** | An enumeration value that indicates the state of the task. See FeedStatusEnum for values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**taskId** | **string** | The unique eBay-assigned ID of the task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
