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

$apiInstance = new Swagger\Client\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$gaebFile = './GAEBXML_EN.X86';
try {
    $result = $apiInstance->gaebConversionConvertToAva($gaebFile);
    
    // Uncomment this line if you want to print all element types
    //printElementTypes($result->getServiceSpecifications()[0]->getElements());

    echo '<h2>Positions:</h2>';
    printPositions($result);
    echo '<h2>Full Project:</h2>';
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}

function printPositions($project) {
    $baseContainer = $project->getServiceSpecifications()[0];
    $elements = getElementsInContainer($baseContainer);
    
    foreach ($elements as $element) {
        if ($element->getElementTypeDiscriminator() == 'PositionDto') {
            // The 'elementTypeDiscriminator' identifies the kind of element,
            // in this case it's a position
            echo $element->getItemNumber()->getStringRepresentation().'<br>';
        }
    }
}

function getElementsInContainer($container) {
    $elementsList = [];
    foreach ($container->getElements() as $element) {
        array_push($elementsList, $element);
        if ($element->getElementTypeDiscriminator() == 'ServiceSpecificationGroupDto') {
            $childElements = getElementsInContainer($element);
            foreach ($childElements as $childElement) {
                array_push($elementsList, $childElement);
            }
        }
    }

    return $elementsList;
}

function printElementTypes($elements) {
    foreach ($elements as $element) {
        if ($element->getElementTypeDiscriminator() == 'ServiceSpecificationGroupDto') {
            echo 'Group start '.$element->getItemNumber()->getStringRepresentation()
            .' - '
            .$element->getShortText()
            .'<br>';
            // Groups have elements of their own
            printElementTypes($element->getElements());
            echo 'Group end '.$element->getItemNumber()->getStringRepresentation().'<br>';
        } else if ($element->getElementTypeDiscriminator() == 'PositionDto') {
            echo 'Position '.$element->getItemNumber()->getStringRepresentation()
            .' - '
            .$element->getShortText()
            .'<br>';
        } else if ($element->getElementTypeDiscriminator() == 'NoteTextDto') {
            echo 'Note Text<br>';
        } else if ($element->getElementTypeDiscriminator() == 'ExecutionDescriptionDto') {
            echo 'ExecutionDescription<br>';
        }
    }
}

?>