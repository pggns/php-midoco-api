<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableSupplierIdResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType[]
     */
    protected ?array $MidocoSupplier = null;
    /**
     * Constructor method for GetAvailableSupplierIdResponse
     * @uses GetAvailableSupplierIdResponse::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType[] $midocoSupplier
     */
    public function __construct(?array $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType[]
     */
    public function getMidocoSupplier(): ?array
    {
        return $this->MidocoSupplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierForArrayConstraintFromSetMidocoSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableSupplierIdResponseMidocoSupplierItem) {
            // validation for constraint: itemType
            if (!$getAvailableSupplierIdResponseMidocoSupplierItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType) {
                $invalidValues[] = is_object($getAvailableSupplierIdResponseMidocoSupplierItem) ? get_class($getAvailableSupplierIdResponseMidocoSupplierItem) : sprintf('%s(%s)', gettype($getAvailableSupplierIdResponseMidocoSupplierItem), var_export($getAvailableSupplierIdResponseMidocoSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType[] $midocoSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableSupplierIdResponse
     */
    public function setMidocoSupplier(?array $midocoSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierArrayErrorMessage = self::validateMidocoSupplierForArrayConstraintFromSetMidocoSupplier($midocoSupplier))) {
            throw new InvalidArgumentException($midocoSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableSupplierIdResponse
     */
    public function addToMidocoSupplier(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplier[] = $item;
        
        return $this;
    }
}
