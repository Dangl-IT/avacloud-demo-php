# ItemNumberSchemaTierDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**length** | **int** | The (maximum) length for this tier. Will not accept a length less than 1. Defaults to 1 if length less than one is specified. | 
**type** | [**\Swagger\Client\Model\ItemNumberTypeDto**](ItemNumberTypeDto.md) | This ItemNumberSchemaTier&#39;s type. | 
**tier_type** | [**\Swagger\Client\Model\ItemNumberSchemaTierTypeDto**](ItemNumberSchemaTierTypeDto.md) | This specifies which ItemNumberSchemaTierType this tier represents. This can be, for example, a group tier / level, a position level or a lot level. | 
**is_lot** | **bool** | Indicates if this tier represents a lot. See the documentation for more information about lots. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


