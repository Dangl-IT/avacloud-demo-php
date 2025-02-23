# avacloud-demo-php

[**AVA**Cloud](https://www.dangl-it.com/products/avacloud-gaeb-saas/) is a web based Software as a Service (SaaS) offering for [GAEB files](https://www.dangl-it.com/articles/what-is-gaeb/).  
The GAEB standard is a widely used format to exchange tenderings, bills of quantities and contracts both in the construction industry and in regular commerce. **AVA**Cloud uses the [GAEB & AVA .Net Libraries](https://www.dangl-it.com/products/gaeb-ava-net-library/) and makes them available to virtually all programming frameworks via a web service.

This project here contains example code in PHP to read and convert GAEB files. The client code is generated from the [**AVA**Cloud Swagger Specification](https://avacloud-api.dangl-it.com/swagger).

## Client Libraries

The client libraries are available here:  
https://github.com/Dangl-IT/Dangl.AVACloudClientGenerator/releases

The PHP client is available on Packagist: [https://packagist.org/packages/dangl/avacloud](https://packagist.org/packages/dangl/avacloud)

## Installation

1. Run `composer install` in the root directory.

### Alternative Install with Source Code

Instead of importing the dependency via Composer, you can manually download the source from here: [https://github.com/Dangl-IT/Dangl.AVACloudClientGenerator/releases](https://github.com/Dangl-IT/Dangl.AVACloudClientGenerator/releases). Just make sure to run `composer install` after unzipping the client code.

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

$baseContainer = $project->serviceSpecifications[0];
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

To print the whole structure of the service specification, you can use code like this:

```php
$result = $apiInstance->gaebConversionConvertToAva($gaebFile);
printElementTypes($result->getServiceSpecifications()[0]->getElements());

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
```

## AVACloud Key Features

- Can read all GAEB90, GAEB2000 and GAEB XML files. It includes many heuristics and eror corrections that can recover incorrect files
- Hassle-free import: Just pass the file to **AVACloud**, format detection and error recovery happens automatically
- Advanced code, built on years of experience, allows the preservation of most information even when converting to an earlier version of the GAEB standard
- Automatic calculation of prices, quantities and more - **AVACloud** can do much more beyond just converting your data
- Over **250.000** tests are run automatically on every commit. Tests range from unit tests in the conversion code up to full integration tests mirroring a full production environment

### Supported Formats

![AVACloud Features](./img/AVACloud%20Diagram%20EN.png)

**... and many more!**

### UI Components

Easy integration with prebuilt UI components is possible within minutes:

- Either by using our Angular specific `@dangl/angular-ava` package: <https://www.npmjs.com/package/@dangl/angular-ava>
- Or with our framework agnostict Html web component implementation that run anywhere, either in web apps or locally in a web view: <https://www.npmjs.com/package/@dangl/web-components-ava>

---

[License](./LICENSE.md)
