# Swagger\Client\ExcelConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**excelConversionConvertToAva**](ExcelConversionApi.md#excelConversionConvertToAva) | **POST** /conversion/excel/ava | Converts Excel files to Dangl.AVA projects.
[**excelConversionConvertToExcel**](ExcelConversionApi.md#excelConversionConvertToExcel) | **POST** /conversion/excel/excel | Converts Excel files to Excel files. Used, for example, when elements were added in excel to generate or modify a project. The Excel file can then be shared containing the full project with all formattings, formulas and styles applied.
[**excelConversionConvertToGaeb**](ExcelConversionApi.md#excelConversionConvertToGaeb) | **POST** /conversion/excel/gaeb | Converts Excel files to GAEB files.
[**excelConversionConvertToOenorm**](ExcelConversionApi.md#excelConversionConvertToOenorm) | **POST** /conversion/excel/oenorm | Converts Excel files to Oenorm files.


# **excelConversionConvertToAva**
> \Swagger\Client\Model\ProjectDto excelConversionConvertToAva($excel_file, $read_new_elements, $rebuild_item_number_schema, $remove_plain_text_long_texts, $remove_html_long_texts)

Converts Excel files to Dangl.AVA projects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excel_file = "/path/to/file.txt"; // \SplFileObject | The input file
$read_new_elements = true; // bool | Defaults to false
$rebuild_item_number_schema = true; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$remove_plain_text_long_texts = true; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = true; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->excelConversionConvertToAva($excel_file, $read_new_elements, $rebuild_item_number_schema, $remove_plain_text_long_texts, $remove_html_long_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excel_file** | **\SplFileObject**| The input file | [optional]
 **read_new_elements** | **bool**| Defaults to false | [optional]
 **rebuild_item_number_schema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional]
 **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional]
 **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional]

### Return type

[**\Swagger\Client\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/vnd.com.dangl-it.ProjectDto.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **excelConversionConvertToExcel**
> \SplFileObject excelConversionConvertToExcel($excel_file, $read_new_elements, $rebuild_item_number_schema, $write_prices, $write_long_texts, $conversion_culture)

Converts Excel files to Excel files. Used, for example, when elements were added in excel to generate or modify a project. The Excel file can then be shared containing the full project with all formattings, formulas and styles applied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excel_file = "/path/to/file.txt"; // \SplFileObject | The input file
$read_new_elements = true; // bool | Defaults to false
$rebuild_item_number_schema = true; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files

try {
    $result = $apiInstance->excelConversionConvertToExcel($excel_file, $read_new_elements, $rebuild_item_number_schema, $write_prices, $write_long_texts, $conversion_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excel_file** | **\SplFileObject**| The input file | [optional]
 **read_new_elements** | **bool**| Defaults to false | [optional]
 **rebuild_item_number_schema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional]
 **write_prices** | **bool**| Defaults to true | [optional]
 **write_long_texts** | **bool**| Defaults to true | [optional]
 **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **excelConversionConvertToGaeb**
> \SplFileObject excelConversionConvertToGaeb($excel_file, $read_new_elements, $rebuild_item_number_schema, $destination_gaeb_type, $target_exchange_phase_transform)

Converts Excel files to GAEB files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excel_file = "/path/to/file.txt"; // \SplFileObject | The input file
$read_new_elements = true; // bool | Defaults to false
$rebuild_item_number_schema = true; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done

try {
    $result = $apiInstance->excelConversionConvertToGaeb($excel_file, $read_new_elements, $rebuild_item_number_schema, $destination_gaeb_type, $target_exchange_phase_transform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excel_file** | **\SplFileObject**| The input file | [optional]
 **read_new_elements** | **bool**| Defaults to false | [optional]
 **rebuild_item_number_schema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional]
 **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional]
 **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **excelConversionConvertToOenorm**
> \SplFileObject excelConversionConvertToOenorm($excel_file, $read_new_elements, $rebuild_item_number_schema, $destination_oenorm_type, $try_repair_project_structure)

Converts Excel files to Oenorm files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excel_file = "/path/to/file.txt"; // \SplFileObject | The input file
$read_new_elements = true; // bool | Defaults to false
$rebuild_item_number_schema = true; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$destination_oenorm_type = "destination_oenorm_type_example"; // string | Defaults to Lv2015
$try_repair_project_structure = true; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target

try {
    $result = $apiInstance->excelConversionConvertToOenorm($excel_file, $read_new_elements, $rebuild_item_number_schema, $destination_oenorm_type, $try_repair_project_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excel_file** | **\SplFileObject**| The input file | [optional]
 **read_new_elements** | **bool**| Defaults to false | [optional]
 **rebuild_item_number_schema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional]
 **destination_oenorm_type** | **string**| Defaults to Lv2015 | [optional]
 **try_repair_project_structure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

