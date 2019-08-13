# PriceInformationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**hourly_wage** | **float** | The amount of currency per one hour of manual labour work in this project. | 
**deduction_factor** | **float** | The final, total price will be deducted by this rate. | 
**flat_sum** | **float** | This is given when there is only one flat price for the whole service specification. | 
**tax_rate** | **float** | Global tax rate for the project. Note that certain elements may have a different, specific tax rate. | 
**trade_discounts** | [**\Swagger\Client\Model\TradeDiscountDto[]**](TradeDiscountDto.md) | Trade discounts for offered in this ServiceSpecification. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


