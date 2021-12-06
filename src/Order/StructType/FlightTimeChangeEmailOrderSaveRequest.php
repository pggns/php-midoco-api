<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeChangeEmailOrderSaveRequest StructType
 * @subpackage Structs
 */
class FlightTimeChangeEmailOrderSaveRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for FlightTimeChangeEmailOrderSaveRequest
     * @uses FlightTimeChangeEmailOrderSaveRequest::setOrderId()
     * @uses FlightTimeChangeEmailOrderSaveRequest::setMidocoMailMessage()
     * @param int $orderId
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?int $orderId = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setOrderId($orderId)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailOrderSaveRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailOrderSaveRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
