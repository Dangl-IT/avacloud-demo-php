# ProjectDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**price_accuracy** | **int** | This property controls the accuracy of all price properties, meaning how many decimal places are preserved in calculations. It defaults to DEFAULT_PRICE_ACCURACY. Please see the Dangl.AVA documentation for further information about decimal precision. | 
**force_strict_totals** | **bool** | This forces total prices to be the strict product of quantities times unit price in positions. It is enabled by default. If this is disabled, both the unit price and the total price of positions is calculated from the non-rounded values. Please see the documentation for a more detailed explanation of this setting. | 
**price_rounding_mode** | [**\Swagger\Client\Model\PriceRoundingModeDto**](PriceRoundingModeDto.md) | This property controls the rounding mode of all price properties, meaning how rounding of decimal places is performed in price calculations. It defaults to DEFAULT_ROUNDING_MODE. Please see the Dangl.AVA documentation for further information about decimal precision. | 
**project_information** | [**\Swagger\Client\Model\ProjectInformationDto**](ProjectInformationDto.md) | The ProjectInformation contains information that describes the project and its structure. | [optional] 
**service_specifications** | [**\Swagger\Client\Model\ServiceSpecificationDto[]**](ServiceSpecificationDto.md) | The ServiceSpecifications in this Project. | [optional] 
**gaeb_xml_id** | **string** | This is used to store the GAEB XML Id within this Project. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


