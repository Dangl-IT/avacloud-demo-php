# QuantityAssignmentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**quantity** | **float** | The total quantity in this quantity assignment | 
**project_catalogues** | [**\Swagger\Client\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogue that are used within this ServiceSpecification. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. | [optional] 
**catalogue_references** | [**\Swagger\Client\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this QuantityAssignment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


