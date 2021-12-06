<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemsSettlementNeededResponse StructType
 * @subpackage Structs
 */
class GetSellItemsSettlementNeededResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking[]
     */
    protected ?array $MidocoSupplierAgencySettlementBooking = null;
    /**
     * Constructor method for GetSellItemsSettlementNeededResponse
     * @uses GetSellItemsSettlementNeededResponse::setMidocoSupplierAgencySettlementBooking()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking[] $midocoSupplierAgencySettlementBooking
     */
    public function __construct(?array $midocoSupplierAgencySettlementBooking = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking[]
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?array
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAgencySettlementBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementBookingForArrayConstraintsFromSetMidocoSupplierAgencySettlementBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem) {
            // validation for constraint: itemType
            if (!$getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking) {
                $invalidValues[] = is_object($getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem) ? get_class($getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem) : sprintf('%s(%s)', gettype($getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem), var_export($getSellItemsSettlementNeededResponseMidocoSupplierAgencySettlementBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementBooking property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking[] $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededResponse
     */
    public function setMidocoSupplierAgencySettlementBooking(?array $midocoSupplierAgencySettlementBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementBookingArrayErrorMessage = self::validateMidocoSupplierAgencySettlementBookingForArrayConstraintsFromSetMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededResponse
     */
    public function addToMidocoSupplierAgencySettlementBooking(\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementBooking property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBooking[] = $item;
        
        return $this;
    }
}
