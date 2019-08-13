# avacloud-demo-php

[**AVA**Cloud](https://www.dangl-it.com/products/avacloud-gaeb-saas/) is a web based Software as a Service (SaaS) offering for [GAEB files](https://www.dangl-it.com/articles/what-is-gaeb/).  
The GAEB standard is a widely used format to exchange tenderings, bills of quantities and contracts both in the construction industry and in regular commerce. **AVA**Cloud uses the [GAEB & AVA .Net Libraries](https://www.dangl-it.com/products/gaeb-ava-net-library/) and makes them available to virtually all programming frameworks via a web service.

This project here contains example code in PHP to read and convert GAEB files. The client code is generated from the [**AVA**Cloud Swagger Specification](https://avacloud-api.dangl-it.com/swagger).

## Client Libraries

The client libraries are available here:  
https://github.com/Dangl-IT/Dangl.AVACloudClientGenerator/releases

## Installation

1. Run `composer install` in the `generated_client/php-client/SwaggerClient-php/` directory.

## Run the Project

Simply run the PHP server in the root of this repository and navigate to `/demo.php`. The script will send the GAEB file `GAEBXML_EN.X86` to the AVACloud API and print the converted project to the screen. Additionally, it will print the _item numbers_ for all encountered positions in the project. 

Please make sure that the `$clientId` and `$clientSecret` variables are set at the top of the `demo.php`. See the next section for details.

## Create new GAEB Files with PHP

The `/create-new-project.php` file works similar to the regular demo. It uses the **Dangl.AVA** project format to create a GAEB file in PHP by sending an object to AVACloud. The returned GAEB file is printed to the screen.

## Authentication

You will need to authenticate with AVACloud with your client secret and client id. These are the credentials of your [**Dangl.Identity**](https://identity.dangl-it.com) OAuth2 client that is configured to access **AVA**Cloud.  
If you don't have values for `ClientId` and `ClientSecret` yet, you can [check out the documentation](https://docs.dangl-it.com/Projects/AVACloud/latest/howto/registration/developer_signup.html) for instructions on how to register for **AVA**Cloud and create an OAuth2 client.

## Example Code - Iterating over all Elements

The following PHP snippet displays how you can iterate recursively over all elements in a **Dangl.AVA** project:

```php
$project = getProject();

$baseContainer = $project->ServiceSpecifications[0];
$elements = getElementsInContainer($baseContainer);

foreach ($elements as $element) {
    if ($element->elementTypeDiscriminator == 'PositionDto') {
        // The 'elementTypeDiscriminator' identifies the kind of element,
        // in this case it's a position
        echo $element->itemNumber->stringRepresentation.'<br>';
        // You can also set the price for a position
        $element->unitPriceOverride = 200.0;
    }
}

function getElementsInContainer($container) {
    $elementsList = [];
    foreach ($container->elements as $element) {
        array_push($elementsList, $element);
        if ($element->elementTypeDiscriminator == 'ServiceSpecificationGroupDto') {
            $childElements = getElementsInContainer($element);
            foreach ($childElements as $childElement) {
                array_push($elementsList, $childElement);
            }
        }
    }

    return $elementsList;
}
```

---
[License](./LICENSE.md)
