# # CreateOrderTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedType** | **string** | The feed type associated with the task. The only presently supported value is LMS_ORDER_REPORT. | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\OrderFilterCriteria**](OrderFilterCriteria.md) |  | [optional]
**schemaVersion** | **string** | The schema version of the LMS OrderReport. For the LMS_ORDER_REPORT feed type, see the OrderReport reference page to see the present schema version. The schemaVersion value is the version number shown at the top of the OrderReport page. Restriction: This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after &#39;1113&#39; is &#39;1115&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
