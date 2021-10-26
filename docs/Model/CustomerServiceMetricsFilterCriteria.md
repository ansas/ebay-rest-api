# # CustomerServiceMetricsFilterCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerServiceMetricType** | **string** | An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance. See CustomerServiceMetricTypeEnum for values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**evaluationMarketplaceId** | **string** | An enumeration value that specifies the eBay marketplace where the evaluation occurs. See MarketplaceIdEnum for values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**listingCategories** | **string[]** | A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API. Note: Pass this attribute to narrow down your filter results for the ITEM_NOT_AS_DESCRIBED customerServiceMetricType. Supported categories include: primary(L1) category Id | [optional]
**shippingRegions** | **string[]** | A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. Note: Pass this attribute to narrow down your filter results for the ITEM_NOT_RECEIVED customerServiceMetricType. Supported categories include: primary(L1) category IdSee ShippingRegionTypeEnum for values | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
