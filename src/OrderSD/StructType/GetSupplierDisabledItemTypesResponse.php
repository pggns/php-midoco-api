<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDisabledItemTypesResponse StructType
 * @subpackage Structs
 */
class GetSupplierDisabledItemTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierDisabledItemType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierDisabledItemType
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType[]
     */
    protected ?array $MidocoSupplierDisabledItemType = null;
    /**
     * Constructor method for GetSupplierDisabledItemTypesResponse
     * @uses GetSupplierDisabledItemTypesResponse::setMidocoSupplierDisabledItemType()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType[] $midocoSupplierDisabledItemType
     */
    public function __construct(?array $midocoSupplierDisabledItemType = null)
    {
        $this
            ->setMidocoSupplierDisabledItemType($midocoSupplierDisabledItemType);
    }
    /**
     * Get MidocoSupplierDisabledItemType value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType[]
     */
    public function getMidocoSupplierDisabledItemType(): ?array
    {
        return $this->MidocoSupplierDisabledItemType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierDisabledItemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierDisabledItemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierDisabledItemTypeForArrayConstraintsFromSetMidocoSupplierDisabledItemType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem) {
            // validation for constraint: itemType
            if (!$getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType) {
                $invalidValues[] = is_object($getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem) ? get_class($getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem) : sprintf('%s(%s)', gettype($getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem), var_export($getSupplierDisabledItemTypesResponseMidocoSupplierDisabledItemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierDisabledItemType property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierDisabledItemType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType[] $midocoSupplierDisabledItemType
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledItemTypesResponse
     */
    public function setMidocoSupplierDisabledItemType(?array $midocoSupplierDisabledItemType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierDisabledItemTypeArrayErrorMessage = self::validateMidocoSupplierDisabledItemTypeForArrayConstraintsFromSetMidocoSupplierDisabledItemType($midocoSupplierDisabledItemType))) {
            throw new InvalidArgumentException($midocoSupplierDisabledItemTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierDisabledItemType = $midocoSupplierDisabledItemType;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierDisabledItemType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledItemTypesResponse
     */
    public function addToMidocoSupplierDisabledItemType(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierDisabledItemType property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDisabledItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierDisabledItemType[] = $item;
        
        return $this;
    }
}
