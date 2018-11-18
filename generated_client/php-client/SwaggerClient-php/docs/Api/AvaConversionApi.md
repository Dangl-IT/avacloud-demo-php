# Swagger\Client\AvaConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avaConversionConvertToExcel**](AvaConversionApi.md#avaConversionConvertToExcel) | **POST** /conversion/ava/excel | Converts Dangl.AVA projects to Excel
[**avaConversionConvertToGaeb**](AvaConversionApi.md#avaConversionConvertToGaeb) | **POST** /conversion/ava/gaeb | Converts Dangl.AVA projects to GAEB


# **avaConversionConvertToExcel**
> \SplFileObject avaConversionConvertToExcel($ava_project, $write_prices, $write_long_texts, $conversion_culture)

Converts Dangl.AVA projects to Excel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Swagger\Client\Model\ProjectDto(); // \Swagger\Client\Model\ProjectDto | The Dangl.AVA project
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files

try {
    $result = $apiInstance->avaConversionConvertToExcel($ava_project, $write_prices, $write_long_texts, $conversion_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Swagger\Client\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **write_prices** | **bool**| Defaults to true | [optional]
 **write_long_texts** | **bool**| Defaults to true | [optional]
 **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToGaeb**
> \SplFileObject avaConversionConvertToGaeb($ava_project, $destination_gaeb_type, $target_exchange_phase_transform)

Converts Dangl.AVA projects to GAEB

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Swagger\Client\Model\ProjectDto(); // \Swagger\Client\Model\ProjectDto | The Dangl.AVA project
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done

try {
    $result = $apiInstance->avaConversionConvertToGaeb($ava_project, $destination_gaeb_type, $target_exchange_phase_transform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Swagger\Client\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional]
 **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

