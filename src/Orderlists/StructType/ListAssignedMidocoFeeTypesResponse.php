<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAssignedMidocoFeeTypesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return the fee types taht match the criteria
 * @subpackage Structs
 */
class ListAssignedMidocoFeeTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType[]
     */
    protected ?array $MidocoFeeType = null;
    /**
     * Constructor method for ListAssignedMidocoFeeTypesResponse
     * @uses ListAssignedMidocoFeeTypesResponse::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType[] $midocoFeeType
     */
    public function __construct(?array $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType[]
     */
    public function getMidocoFeeType(): ?array
    {
        return $this->MidocoFeeType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeForArrayConstraintsFromSetMidocoFeeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem) {
            // validation for constraint: itemType
            if (!$listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType) {
                $invalidValues[] = is_object($listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem) ? get_class($listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem) : sprintf('%s(%s)', gettype($listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem), var_export($listAssignedMidocoFeeTypesResponseMidocoFeeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeType property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType[] $midocoFeeType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListAssignedMidocoFeeTypesResponse
     */
    public function setMidocoFeeType(?array $midocoFeeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeArrayErrorMessage = self::validateMidocoFeeTypeForArrayConstraintsFromSetMidocoFeeType($midocoFeeType))) {
            throw new InvalidArgumentException($midocoFeeTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListAssignedMidocoFeeTypesResponse
     */
    public function addToMidocoFeeType(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeType property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeType[] = $item;
        
        return $this;
    }
}