<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPrintRequiredForPassengersResponse StructType
 * @subpackage Structs
 */
class IsPrintRequiredForPassengersResponse extends AbstractStructBase
{
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * Constructor method for IsPrintRequiredForPassengersResponse
     * @uses IsPrintRequiredForPassengersResponse::setMidocoSellPassenger()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     */
    public function __construct(?array $midocoSellPassenger = null)
    {
        $this
            ->setMidocoSellPassenger($midocoSellPassenger);
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isPrintRequiredForPassengersResponseMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$isPrintRequiredForPassengersResponseMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($isPrintRequiredForPassengersResponseMidocoSellPassengerItem) ? get_class($isPrintRequiredForPassengersResponseMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($isPrintRequiredForPassengersResponseMidocoSellPassengerItem), var_export($isPrintRequiredForPassengersResponseMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersResponse
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersResponse
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
}
