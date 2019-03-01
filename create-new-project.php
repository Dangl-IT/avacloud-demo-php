<?php
// Set these variables
$clientId = '';
$clientSecret = '';

require_once(__DIR__ . '/generated_client/php-client/SwaggerClient-php/vendor/autoload.php');

// This is a regular OpenID client credenials grant request to obtain an authentication token
$authHeader = base64_encode($clientId.':'.$clientSecret);
$url = 'https://identity.dangl-it.com/connect/token';
$data = array('grant_type' => 'client_credentials', 'scope' => 'avacloud');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n"
                    ."Authorization: Basic ".$authHeader."\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$authResult = file_get_contents($url, false, $context);
if ($authResult === false) {
    echo 'auth failure';
}
$authToken = json_decode($authResult)->access_token;

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken($authToken);

$apiInstance = new Swagger\Client\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// The AVA Project is loaded from a Json file
$avaJson = file_get_contents('./gaeb.json');
$avaProject = json_decode($avaJson);

// The following snippet shows you how
// to set an unit price in the example project
$avaProject->ServiceSpecifications[0]
    ->Elements[1] // Top Level Group
    ->Elements[0] // Second Level Group
    ->Elements[0] // Position
    ->UnitPriceOverride = 1500.0;

try {
    $result = $apiInstance->avaConversionConvertToGaeb($avaProject);
    echo '<pre>';
    foreach ($result as $line) {
        echo htmlentities($line);
    }
    echo '</pre>';
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}

?>