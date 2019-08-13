# SubDescriptionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**quantity** | **float** | Returns the total calculated sum of all quantity assignments. Will return the result rounded to three decimal places. | 
**quantity_components** | [**\Swagger\Client\Model\CalculationDto[]**](CalculationDto.md) | Holds quantity information for this sub description. Quantity is listening to changes here and is reporting the total sum of all quantity components. | [optional] 
**amount_to_be_entered_by_bidder** | **bool** | Indicates if the bidder is asked to specify an amount. | 
**identifier** | **string** | Identifier for this SubDescription. | [optional] 
**short_text** | **string** | Short description for this DescriptionBase element. | [optional] 
**long_text** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional] 
**html_long_text** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional] 
**addition_type** | [**\Swagger\Client\Model\AdditionTypeDto**](AdditionTypeDto.md) | Indicates if this DescriptionBase element contains Buyer or Bidder additions to the text. | 
**standardized_description** | [**\Swagger\Client\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) | This represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


