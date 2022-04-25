# # OrderTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completionDate** | **string** | The timestamp when the task went into the &lt;code&gt;COMPLETED&lt;/code&gt; or &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a &lt;strong&gt;getResultFile&lt;/strong&gt; call to download the report. | [optional]
**creationDate** | **string** | The date the task was created. | [optional]
**detailHref** | **string** | The path to the call URI used to retrieve the task. | [optional]
**feedType** | **string** | The feed type associated with the task. | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\OrderFilterCriteria**](OrderFilterCriteria.md) |  | [optional]
**schemaVersion** | **string** | The schema version number associated with the create task. | [optional]
**status** | **string** | The enumeration value that indicates the state of the task that was submitted in the request. See &lt;strong&gt;FeedStatusEnum&lt;/strong&gt; for information. &lt;p&gt;The values &lt;code&gt;COMPLETED &lt;/code&gt;and&lt;code&gt; COMPLETED_WITH_ERROR&lt;/code&gt; indicate the Order Report file is ready to download.&lt;/p&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**taskId** | **string** | The ID of the task that was submitted in the request. | [optional]
**uploadSummary** | [**\Ansas\Ebay\Model\UploadSummary**](UploadSummary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
