# # UserScheduleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scheduleId** | **string** | The ID of the schedule. This ID is generated when the schedule was created by the createSchedule method. | [optional]
**creationDate** | **string** | The creation date of the schedule in hours based on the 24-hour Coordinated Universal Time (UTC) clock. | [optional]
**feedType** | **string** | The feedType associated with the schedule. | [optional]
**lastModifiedDate** | **string** | The date the schedule was last modified. | [optional]
**preferredTriggerDayOfMonth** | **int** | The preferred day of the month to trigger the schedule. This field can be used with preferredTriggerHour for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month. | [optional]
**preferredTriggerDayOfWeek** | **string** | The preferred day of the week to trigger the schedule. This field can be used with preferredTriggerHour for weekly schedules. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**preferredTriggerHour** | **string** | The preferred two-digit hour of the day to trigger the schedule. Format: UTC hhZ For example, the following represents 11:00 am UTC: 11Z | [optional]
**scheduleEndDate** | **string** | The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE. | [optional]
**scheduleName** | **string** | The schedule name assigned by the user for the created schedule. Users assign this name for their reference. | [optional]
**scheduleStartDate** | **string** | The timestamp that indicates the start of the report generation. | [optional]
**scheduleTemplateId** | **string** | The ID of the template used to create this schedule. | [optional]
**schemaVersion** | **string** | The schema version of the feedType for the schedule. | [optional]
**status** | **string** | The enumeration value that indicates the state of the schedule. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:StatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**statusReason** | **string** | The reason the schedule is inactive. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:StatusReasonEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
