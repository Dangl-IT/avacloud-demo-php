<?php
/**
 * ExchangePhaseDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.3.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * ExchangePhaseDto Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExchangePhaseDto
{
    /**
     * Possible values of this enum
     */
    const UNDEFINED = 'Undefined';
    const BASE = 'Base';
    const COST_ESTIMATE = 'CostEstimate';
    const OFFER_REQUEST = 'OfferRequest';
    const OFFER = 'Offer';
    const SIDE_OFFER = 'SideOffer';
    const GRANT = 'Grant';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
            self::BASE,
            self::COST_ESTIMATE,
            self::OFFER_REQUEST,
            self::OFFER,
            self::SIDE_OFFER,
            self::GRANT,
        ];
    }
}


