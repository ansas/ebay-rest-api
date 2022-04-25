# # ServiceMetricsTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completionDate** | **string** | The timestamp when the customer service metrics task went into the &lt;code&gt;COMPLETED&lt;/code&gt; or &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a &lt;strong&gt;getResultFile&lt;/strong&gt; call to download the report. | [optional]
**creationDate** | **string** | The date the customer service metrics task was created. | [optional]
**detailHref** | **string** | The relative &lt;strong&gt;getCustomerServiceMetricTask&lt;/strong&gt; call URI path to retrieve the corresponding task. | [optional]
**feedType** | **string** | The feed type associated with the task. | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\CustomerServiceMetricsFilterCriteria**](CustomerServiceMetricsFilterCriteria.md) |  | [optional]
**schemaVersion** | **string** | The schema version number of the file format. If omitted, the default value is used. &lt;p&gt;&lt;b&gt;Default value: &lt;/b&gt;&lt;code&gt;1.0&lt;/code&gt;&lt;p&gt; | [optional]
**status** | **string** | An enumeration value that indicates the state of the task. See &lt;strong&gt;FeedStatusEnum&lt;/strong&gt; for values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**taskId** | **string** | The unique eBay-assigned ID of the task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
