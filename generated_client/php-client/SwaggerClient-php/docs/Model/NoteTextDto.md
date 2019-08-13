# NoteTextDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_opening_text** | **bool** | If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special opening text at the beginning of the project. For example, in GAEB XML, this would map to the GAEB.Award.AddText. Typically, such texts describe project-wide contractual definitions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true. | 
**is_closing_text** | **bool** | If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special closing text at the end of the project. For Example, in GAEB XML, this would map to the GAEB.AddText. Typically, such texts are used to describe project wide finishing descriptions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true. | 
**short_text** | **string** | Short description for this DescriptionBase element. | [optional] 
**addition_type** | [**\Swagger\Client\Model\AdditionTypeDto**](AdditionTypeDto.md) | Indicates if this DescriptionBase element contains Buyer or Bidder additions to the text. | 
**long_text** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional] 
**html_long_text** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional] 
**standardized_description** | [**\Swagger\Client\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) | This represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding. | [optional] 
**element_type** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


