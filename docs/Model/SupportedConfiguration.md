# # SupportedConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**defaultValue** | **string** | The default value for the property. If a value is omitted from the schedule and a default value is supplied, the default value is used. | [optional]
**property** | **string** | Properties supported by the template. Properties can include the following: scheduleStartDate: The timestamp that the report generation (subscription) begins. After this timestamp, the schedule status becomes active until either the scheduleEndDate occurs or the scheduleTemplate becomes inactive. Format: UTC yyyy-MM-ddTHHZ scheduleEndDate: The timestamp that the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE. Format: UTC yyyy-MM-ddTHHZ schemaVersion: The schema version of the schedule templates feedType. This field is required if the feedType has a schema version. preferredTriggerDayOfMonth: The preferred day of the month to trigger the schedule. preferredTriggerDayOfWeek: The preferred day of the week to trigger the schedule. preferredTriggerHour: The preferred two-digit hour of the day to trigger the schedule. Format: UTC hhZ | [optional]
**usage** | **string** | Whether the specified property is REQUIRED or OPTIONAL. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:ConfigurationsUsageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
