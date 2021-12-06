<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAgencySettlementsResponse StructType
 * @subpackage Structs
 */
class SearchSupplierAgencySettlementsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlement
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement[]
     */
    protected ?array $MidocoSupplierAgencySettlement = null;
    /**
     * Constructor method for SearchSupplierAgencySettlementsResponse
     * @uses SearchSupplierAgencySettlementsResponse::setMidocoSupplierAgencySettlement()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement[] $midocoSupplierAgencySettlement
     */
    public function __construct(?array $midocoSupplierAgencySettlement = null)
    {
        $this
            ->setMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement);
    }
    /**
     * Get MidocoSupplierAgencySettlement value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement[]
     */
    public function getMidocoSupplierAgencySettlement(): ?array
    {
        return $this->MidocoSupplierAgencySettlement;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAgencySettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementForArrayConstraintsFromSetMidocoSupplierAgencySettlement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem) {
            // validation for constraint: itemType
            if (!$searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement) {
                $invalidValues[] = is_object($searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem) ? get_class($searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem) : sprintf('%s(%s)', gettype($searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem), var_export($searchSupplierAgencySettlementsResponseMidocoSupplierAgencySettlementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlement property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement[] $midocoSupplierAgencySettlement
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchSupplierAgencySettlementsResponse
     */
    public function setMidocoSupplierAgencySettlement(?array $midocoSupplierAgencySettlement = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementArrayErrorMessage = self::validateMidocoSupplierAgencySettlementForArrayConstraintsFromSetMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlement = $midocoSupplierAgencySettlement;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchSupplierAgencySettlementsResponse
     */
    public function addToMidocoSupplierAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlement property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlement[] = $item;
        
        return $this;
    }
}