<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSupplierCommissionResponse StructType
 * @subpackage Structs
 */
class CalculateSupplierCommissionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommissionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCommissionInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo[]
     */
    protected ?array $MidocoSupplierCommissionInfo = null;
    /**
     * Constructor method for CalculateSupplierCommissionResponse
     * @uses CalculateSupplierCommissionResponse::setMidocoSupplierCommissionInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo[] $midocoSupplierCommissionInfo
     */
    public function __construct(?array $midocoSupplierCommissionInfo = null)
    {
        $this
            ->setMidocoSupplierCommissionInfo($midocoSupplierCommissionInfo);
    }
    /**
     * Get MidocoSupplierCommissionInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo[]
     */
    public function getMidocoSupplierCommissionInfo(): ?array
    {
        return $this->MidocoSupplierCommissionInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierCommissionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCommissionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCommissionInfoForArrayConstraintsFromSetMidocoSupplierCommissionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem) {
            // validation for constraint: itemType
            if (!$calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo) {
                $invalidValues[] = is_object($calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem) ? get_class($calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem) : sprintf('%s(%s)', gettype($calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem), var_export($calculateSupplierCommissionResponseMidocoSupplierCommissionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCommissionInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCommissionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo[] $midocoSupplierCommissionInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionResponse
     */
    public function setMidocoSupplierCommissionInfo(?array $midocoSupplierCommissionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCommissionInfoArrayErrorMessage = self::validateMidocoSupplierCommissionInfoForArrayConstraintsFromSetMidocoSupplierCommissionInfo($midocoSupplierCommissionInfo))) {
            throw new InvalidArgumentException($midocoSupplierCommissionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCommissionInfo = $midocoSupplierCommissionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCommissionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionResponse
     */
    public function addToMidocoSupplierCommissionInfo(\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCommissionInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierCommissionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCommissionInfo[] = $item;
        
        return $this;
    }
}
