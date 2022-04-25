# # CreateInventoryTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schemaVersion** | **string** | The schemaVersion/version number of the file format (use the schema version of the API to which you are programming):&lt;ul&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;/api-docs/sell/static/lms-migration/lms-to-feed-version-details-schema-version.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;LMS Version Details / Schema Version&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;/api-docs/sell/static/file-exchange-migration/fx-schema-version.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;File Exchange Schema Version&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
**feedType** | **string** | The feed type associated with the inventory task you are about to create. Use a &lt;strong&gt;feedType&lt;/strong&gt; that is available for your API. Presently, only one feed type is available:&lt;ul&gt;&lt;li&gt;&lt;code&gt;LMS_ACTIVE_INVENTORY_REPORT&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;br/&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Report download feed types&lt;/a&gt; for more information. | [optional]
**filterCriteria** | [**\Ansas\Ebay\Model\InventoryFilterCriteria**](InventoryFilterCriteria.md) |  | [optional]
**inventoryFileTemplate** | **string** | The inventory file template used to return specific types of inventory tasks. Presently not applicable for &lt;code&gt;LMS_ACTIVE_INVENTORY_REPORT&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:InventoryFileTemplateEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
