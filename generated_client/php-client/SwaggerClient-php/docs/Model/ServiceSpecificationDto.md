# ServiceSpecificationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**project_hourly_wage** | **float** |  | 
**project_tax_rate** | **float** |  | 
**project_price_components** | **string[]** |  | [optional] 
**project_item_number_schema** | [**\Swagger\Client\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) |  | [optional] 
**elements** | [**\Swagger\Client\Model\IElementDto[]**](IElementDto.md) |  | [optional] 
**project_labour_time_label** | **string** |  | [optional] 
**contains_duplicate_item_numbers** | **bool** |  | 
**ignore_duplicate_item_numbers** | **bool** |  | 
**total_price_gross_by_tax_rate** | [**\Swagger\Client\Model\GrossPriceComponentDto[]**](GrossPriceComponentDto.md) |  | [optional] 
**ignore_child_price_updates** | **bool** |  | 
**deducted_price** | **float** |  | 
**deduction_factor** | **float** |  | 
**total_price** | **float** |  | 
**total_price_gross** | **float** |  | 
**total_price_gross_deducted** | **float** |  | 
**price_type** | [**\Swagger\Client\Model\PriceTypeDto**](PriceTypeDto.md) |  | 
**bidder** | [**\Swagger\Client\Model\PartyInformationDto**](PartyInformationDto.md) |  | [optional] 
**gaeb_xml_id** | **string** |  | [optional] 
**project_information** | **object** |  | [optional] 
**exchange_phase** | [**\Swagger\Client\Model\ExchangePhaseDto**](ExchangePhaseDto.md) |  | 
**origin** | [**\Swagger\Client\Model\OriginDto**](OriginDto.md) |  | 
**creation_date** | [**\DateTime**](\DateTime.md) |  | 
**offer_by_date** | [**\DateTime**](\DateTime.md) |  | 
**decision_date** | [**\DateTime**](\DateTime.md) |  | 
**submission_location** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**price_information** | [**\Swagger\Client\Model\PriceInformationDto**](PriceInformationDto.md) |  | [optional] 
**project_catalogues** | [**\Swagger\Client\Model\CatalogueDto[]**](CatalogueDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


