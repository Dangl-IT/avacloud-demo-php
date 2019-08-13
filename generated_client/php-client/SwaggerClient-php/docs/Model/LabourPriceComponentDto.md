# LabourPriceComponentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** | The label associated with this price component. Will be taken from the parent Projects ProjectInformation. | [optional] 
**price** | **float** | The total, calculated price of this component. Will multiply the calculated amount of hours with the ServiceSpecifications hourly wage rate. | 
**hourly_wage** | **float** | The cost per hour of manual labor. | 
**values** | [**\Swagger\Client\Model\CalculationDto[]**](CalculationDto.md) | The single Calculation elements this price component is composed of. | [optional] 
**use_own_hourly_wage** | **bool** | Indicates if the ServiceSpecification&#39;s standard HourlyWage is to be used or a custom value. | 
**total_time** | **float** | The total, calculated time of this component. Will return the result rounded to three decimal places. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


