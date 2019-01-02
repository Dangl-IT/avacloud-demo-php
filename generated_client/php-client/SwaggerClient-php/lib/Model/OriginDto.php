<?php
/**
 * OriginDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.4.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * OriginDto Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OriginDto
{
    /**
     * Possible values of this enum
     */
    const SELF = 'Self';
    const GAEB90 = 'Gaeb90';
    const GAEB2000 = 'Gaeb2000';
    const GAEB_XML = 'GaebXml';
    const OENORM = 'Oenorm';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELF,
            self::GAEB90,
            self::GAEB2000,
            self::GAEB_XML,
            self::OENORM,
        ];
    }
}


