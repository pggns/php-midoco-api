<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCompleteBookingPeriod StructType
 * @subpackage Structs
 */
class MidocoCompleteBookingPeriod extends BookingPeriodDTO
{
    /**
     * The MidocoBookingPeriodAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingPeriodAccount
     * @var \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO[]
     */
    protected ?array $MidocoBookingPeriodAccount = null;
    /**
     * Constructor method for MidocoCompleteBookingPeriod
     * @uses MidocoCompleteBookingPeriod::setMidocoBookingPeriodAccount()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO[] $midocoBookingPeriodAccount
     */
    public function __construct(?array $midocoBookingPeriodAccount = null)
    {
        $this
            ->setMidocoBookingPeriodAccount($midocoBookingPeriodAccount);
    }
    /**
     * Get MidocoBookingPeriodAccount value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO[]
     */
    public function getMidocoBookingPeriodAccount(): ?array
    {
        return $this->MidocoBookingPeriodAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingPeriodAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingPeriodAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingPeriodAccountForArrayConstraintsFromSetMidocoBookingPeriodAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) {
            // validation for constraint: itemType
            if (!$midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem instanceof \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO) {
                $invalidValues[] = is_object($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) ? get_class($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) : sprintf('%s(%s)', gettype($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem), var_export($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingPeriodAccount property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingPeriodAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO[] $midocoBookingPeriodAccount
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCompleteBookingPeriod
     */
    public function setMidocoBookingPeriodAccount(?array $midocoBookingPeriodAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingPeriodAccountArrayErrorMessage = self::validateMidocoBookingPeriodAccountForArrayConstraintsFromSetMidocoBookingPeriodAccount($midocoBookingPeriodAccount))) {
            throw new InvalidArgumentException($midocoBookingPeriodAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingPeriodAccount = $midocoBookingPeriodAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingPeriodAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCompleteBookingPeriod
     */
    public function addToMidocoBookingPeriodAccount(\Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingPeriodAccount property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingPeriodAccount[] = $item;
        
        return $this;
    }
}
