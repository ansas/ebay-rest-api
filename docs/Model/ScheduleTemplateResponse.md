# # ScheduleTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedType** | **string** | The feed type of the schedule template. Note: When calling createSchedule and updateSchedule methods you must match the feed type specified by the schedule template (this feedType). | [optional]
**frequency** | **string** | This field specifies how often the schedule is generated. If set to HALF_HOUR or ONE_HOUR, you cannot set a preferredTriggerHour using createSchedule or updateSchedule. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FrequencyEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**name** | **string** | The template name provided by the template. | [optional]
**scheduleTemplateId** | **string** | The ID of the template. Use this ID to create a schedule based on the properties of this schedule template. | [optional]
**status** | **string** | The present status of the template. You cannot create or modify a schedule using a template with an INACTIVE status. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:StatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**supportedConfigurations** | [**\Ansas\Ebay\Model\SupportedConfiguration[]**](SupportedConfiguration.md) | An array of the configuration supported by this template. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
