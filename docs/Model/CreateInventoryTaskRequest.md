# # CreateInventoryTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schemaVersion** | **string** | The schemaVersion/version number of the file format (use the schema version of the API to which you are programming): LMS Version Details / Schema Version File Exchange Schema Version | [optional]
**feedType** | **string** | The feed type associated with the inventory task you are about to create. Use a feedType that is available for your API. Presently, only one feed type is available: LMS_ACTIVE_INVENTORY_REPORT | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\InventoryFilterCriteria**](InventoryFilterCriteria.md) |  | [optional]
**inventoryFileTemplate** | **string** | The inventory file template used to return specific types of inventory tasks. Presently not applicable for LMS_ACTIVE_INVENTORY_REPORT. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:InventoryFileTemplateEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
