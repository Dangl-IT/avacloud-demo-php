<?php
/**
 * ResponseErrorType
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
 * ResponseErrorType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseErrorType
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const PROTOCOL = 'Protocol';
    const HTTP = 'Http';
    const EXCEPTION = 'Exception';
    const POLICY_VIOLATION = 'PolicyViolation';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::PROTOCOL,
            self::HTTP,
            self::EXCEPTION,
            self::POLICY_VIOLATION,
        ];
    }
}


