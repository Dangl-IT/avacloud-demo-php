# Swagger\Client\GaebConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gaebConversionConvertToAva**](GaebConversionApi.md#gaebConversionConvertToAva) | **POST** /conversion/gaeb/ava | Converts GAEB files to Dangl.AVA projects
[**gaebConversionConvertToExcel**](GaebConversionApi.md#gaebConversionConvertToExcel) | **POST** /conversion/gaeb/excel | Converts GAEB files to Excel
[**gaebConversionConvertToGaeb**](GaebConversionApi.md#gaebConversionConvertToGaeb) | **POST** /conversion/gaeb/gaeb | Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.
[**gaebConversionConvertToOenorm**](GaebConversionApi.md#gaebConversionConvertToOenorm) | **POST** /conversion/gaeb/oenorm | Converts GAEB files to Oenorm files


# **gaebConversionConvertToAva**
> \Swagger\Client\Model\ProjectDto gaebConversionConvertToAva($gaeb_file, $remove_plain_text_long_texts, $remove_html_long_texts)

Converts GAEB files to Dangl.AVA projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$remove_plain_text_long_texts = true; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = true; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->gaebConversionConvertToAva($gaeb_file, $remove_plain_text_long_texts, $remove_html_long_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
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

# **gaebConversionConvertToExcel**
> \SplFileObject gaebConversionConvertToExcel($gaeb_file, $write_prices, $write_long_texts, $conversion_culture)

Converts GAEB files to Excel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files

try {
    $result = $apiInstance->gaebConversionConvertToExcel($gaeb_file, $write_prices, $write_long_texts, $conversion_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
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

# **gaebConversionConvertToGaeb**
> \SplFileObject gaebConversionConvertToGaeb($gaeb_file, $destination_gaeb_type, $target_exchange_phase_transform)

Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done

try {
    $result = $apiInstance->gaebConversionConvertToGaeb($gaeb_file, $destination_gaeb_type, $target_exchange_phase_transform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
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

# **gaebConversionConvertToOenorm**
> \SplFileObject gaebConversionConvertToOenorm($gaeb_file, $destination_oenorm_type, $try_repair_project_structure)

Converts GAEB files to Oenorm files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$destination_oenorm_type = "destination_oenorm_type_example"; // string | Defaults to Lv2015
$try_repair_project_structure = true; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target

try {
    $result = $apiInstance->gaebConversionConvertToOenorm($gaeb_file, $destination_oenorm_type, $try_repair_project_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
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

