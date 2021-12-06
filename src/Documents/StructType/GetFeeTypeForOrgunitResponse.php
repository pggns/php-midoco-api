<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeTypeForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetFeeTypeForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit[]
     */
    protected ?array $MidocoFeeTypeOrgUnit = null;
    /**
     * Constructor method for GetFeeTypeForOrgunitResponse
     * @uses GetFeeTypeForOrgunitResponse::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit[] $midocoFeeTypeOrgUnit
     */
    public function __construct(?array $midocoFeeTypeOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit[]
     */
    public function getMidocoFeeTypeOrgUnit(): ?array
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeTypeOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeTypeOrgUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeOrgUnitForArrayConstraintsFromSetMidocoFeeTypeOrgUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) {
            // validation for constraint: itemType
            if (!$getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit) {
                $invalidValues[] = is_object($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) ? get_class($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) : sprintf('%s(%s)', gettype($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem), var_export($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeTypeOrgUnit property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit[] $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Documents\StructType\GetFeeTypeForOrgunitResponse
     */
    public function setMidocoFeeTypeOrgUnit(?array $midocoFeeTypeOrgUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeOrgUnitArrayErrorMessage = self::validateMidocoFeeTypeOrgUnitForArrayConstraintsFromSetMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit))) {
            throw new InvalidArgumentException($midocoFeeTypeOrgUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeTypeOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetFeeTypeForOrgunitResponse
     */
    public function addToMidocoFeeTypeOrgUnit(\Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeTypeOrgUnit property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoFeeTypeOrgUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeTypeOrgUnit[] = $item;
        
        return $this;
    }
}
