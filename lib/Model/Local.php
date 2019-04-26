<?php
/**
 * Local
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WeProov Api
 *
 * WeProov public API
 *
 * OpenAPI spec version: 1.0.0-oas3
 * Contact: support@weproov.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * Local Class Doc Comment
 *
 * @category Class
 * @description Language used during response
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Local
{
    /**
     * Possible values of this enum
     */
    const FR = 'fr';
const EN = 'en';
const ES = 'es';
const NL = 'nl';
const PT = 'pt';
const DE = 'de';
const IT = 'it';
const PL = 'pl';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FR,
self::EN,
self::ES,
self::NL,
self::PT,
self::DE,
self::IT,
self::PL,        ];
    }
}
