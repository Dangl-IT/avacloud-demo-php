# Swagger\Client\DanglIdentityApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**danglIdentityLoginAndReturnToken**](DanglIdentityApi.md#danglIdentityLoginAndReturnToken) | **POST** /identity/token-login | 
[**danglIdentityLoginWithCookie**](DanglIdentityApi.md#danglIdentityLoginWithCookie) | **POST** /identity/login | 
[**danglIdentityRefreshToken**](DanglIdentityApi.md#danglIdentityRefreshToken) | **POST** /identity/token-refresh | 
[**danglIdentityRegister**](DanglIdentityApi.md#danglIdentityRegister) | **POST** /identity/register | 
[**danglIdentityRequestPasswordReset**](DanglIdentityApi.md#danglIdentityRequestPasswordReset) | **POST** /identity/password-forgotten | 
[**danglIdentitySignOutWithSignInManager**](DanglIdentityApi.md#danglIdentitySignOutWithSignInManager) | **DELETE** /identity/login | 


# **danglIdentityLoginAndReturnToken**
> \Swagger\Client\Model\TokenResponseGet danglIdentityLoginAndReturnToken($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\TokenLoginPost(); // \Swagger\Client\Model\TokenLoginPost | 

try {
    $result = $apiInstance->danglIdentityLoginAndReturnToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityLoginAndReturnToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\TokenLoginPost**](../Model/TokenLoginPost.md)|  |

### Return type

[**\Swagger\Client\Model\TokenResponseGet**](../Model/TokenResponseGet.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityLoginWithCookie**
> danglIdentityLoginWithCookie($model, $redirect_url)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\LoginPost(); // \Swagger\Client\Model\LoginPost | 
$redirect_url = "redirect_url_example"; // string | 

try {
    $apiInstance->danglIdentityLoginWithCookie($model, $redirect_url);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityLoginWithCookie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\LoginPost**](../Model/LoginPost.md)|  |
 **redirect_url** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRefreshToken**
> \Swagger\Client\Model\TokenResponseGet danglIdentityRefreshToken($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\TokenRefreshPost(); // \Swagger\Client\Model\TokenRefreshPost | 

try {
    $result = $apiInstance->danglIdentityRefreshToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRefreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\TokenRefreshPost**](../Model/TokenRefreshPost.md)|  |

### Return type

[**\Swagger\Client\Model\TokenResponseGet**](../Model/TokenResponseGet.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRegister**
> danglIdentityRegister($register_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_model = new \Swagger\Client\Model\RegisterPost(); // \Swagger\Client\Model\RegisterPost | 

try {
    $apiInstance->danglIdentityRegister($register_model);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_model** | [**\Swagger\Client\Model\RegisterPost**](../Model/RegisterPost.md)|  |

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRequestPasswordReset**
> danglIdentityRequestPasswordReset($forgot_password_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forgot_password_model = new \Swagger\Client\Model\ForgotPasswordPost(); // \Swagger\Client\Model\ForgotPasswordPost | 

try {
    $apiInstance->danglIdentityRequestPasswordReset($forgot_password_model);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRequestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgot_password_model** | [**\Swagger\Client\Model\ForgotPasswordPost**](../Model/ForgotPasswordPost.md)|  |

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentitySignOutWithSignInManager**
> danglIdentitySignOutWithSignInManager()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->danglIdentitySignOutWithSignInManager();
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentitySignOutWithSignInManager: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

