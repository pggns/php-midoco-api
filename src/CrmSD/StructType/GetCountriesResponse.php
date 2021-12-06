<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountriesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCountries --- returns the list of countries
 * @subpackage Structs
 */
class GetCountriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCountryName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCountryName
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO[]
     */
    protected ?array $MidocoCountryName = null;
    /**
     * Constructor method for GetCountriesResponse
     * @uses GetCountriesResponse::setMidocoCountryName()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO[] $midocoCountryName
     */
    public function __construct(?array $midocoCountryName = null)
    {
        $this
            ->setMidocoCountryName($midocoCountryName);
    }
    /**
     * Get MidocoCountryName value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO[]
     */
    public function getMidocoCountryName(): ?array
    {
        return $this->MidocoCountryName;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCountryName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCountryName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCountryNameForArrayConstraintsFromSetMidocoCountryName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCountriesResponseMidocoCountryNameItem) {
            // validation for constraint: itemType
            if (!$getCountriesResponseMidocoCountryNameItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO) {
                $invalidValues[] = is_object($getCountriesResponseMidocoCountryNameItem) ? get_class($getCountriesResponseMidocoCountryNameItem) : sprintf('%s(%s)', gettype($getCountriesResponseMidocoCountryNameItem), var_export($getCountriesResponseMidocoCountryNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCountryName property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCountryName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO[] $midocoCountryName
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCountriesResponse
     */
    public function setMidocoCountryName(?array $midocoCountryName = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCountryNameArrayErrorMessage = self::validateMidocoCountryNameForArrayConstraintsFromSetMidocoCountryName($midocoCountryName))) {
            throw new InvalidArgumentException($midocoCountryNameArrayErrorMessage, __LINE__);
        }
        $this->MidocoCountryName = $midocoCountryName;
        
        return $this;
    }
    /**
     * Add item to MidocoCountryName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCountriesResponse
     */
    public function addToMidocoCountryName(\Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCountryName property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CountryNameDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCountryName[] = $item;
        
        return $this;
    }
}
