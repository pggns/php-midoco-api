<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderMailErmDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderMailErmDTO extends AbstractStructBase
{
    /**
     * The ermType
     * @var string|null
     */
    protected ?string $ermType = null;
    /**
     * The mailId
     * @var int|null
     */
    protected ?int $mailId = null;
    /**
     * The messageType
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The receipient
     * @var string|null
     */
    protected ?string $receipient = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for OrderMailErmDTO
     * @uses OrderMailErmDTO::setErmType()
     * @uses OrderMailErmDTO::setMailId()
     * @uses OrderMailErmDTO::setMessageType()
     * @uses OrderMailErmDTO::setOrderId()
     * @uses OrderMailErmDTO::setReceipient()
     * @uses OrderMailErmDTO::setSender()
     * @uses OrderMailErmDTO::setSubject()
     * @uses OrderMailErmDTO::setTimestamp()
     * @uses OrderMailErmDTO::setType()
     * @param string $ermType
     * @param int $mailId
     * @param string $messageType
     * @param int $orderId
     * @param string $receipient
     * @param string $sender
     * @param string $subject
     * @param string $timestamp
     * @param string $type
     */
    public function __construct(?string $ermType = null, ?int $mailId = null, ?string $messageType = null, ?int $orderId = null, ?string $receipient = null, ?string $sender = null, ?string $subject = null, ?string $timestamp = null, ?string $type = null)
    {
        $this
            ->setErmType($ermType)
            ->setMailId($mailId)
            ->setMessageType($messageType)
            ->setOrderId($orderId)
            ->setReceipient($receipient)
            ->setSender($sender)
            ->setSubject($subject)
            ->setTimestamp($timestamp)
            ->setType($type);
    }
    /**
     * Get ermType value
     * @return string|null
     */
    public function getErmType(): ?string
    {
        return $this->ermType;
    }
    /**
     * Set ermType value
     * @param string $ermType
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setErmType(?string $ermType = null): self
    {
        // validation for constraint: string
        if (!is_null($ermType) && !is_string($ermType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ermType, true), gettype($ermType)), __LINE__);
        }
        $this->ermType = $ermType;
        
        return $this;
    }
    /**
     * Get mailId value
     * @return int|null
     */
    public function getMailId(): ?int
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param int $mailId
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setMailId(?int $mailId = null): self
    {
        // validation for constraint: int
        if (!is_null($mailId) && !(is_int($mailId) || ctype_digit($mailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
        return $this;
    }
    /**
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
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
     * Get receipient value
     * @return string|null
     */
    public function getReceipient(): ?string
    {
        return $this->receipient;
    }
    /**
     * Set receipient value
     * @param string $receipient
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setReceipient(?string $receipient = null): self
    {
        // validation for constraint: string
        if (!is_null($receipient) && !is_string($receipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receipient, true), gettype($receipient)), __LINE__);
        }
        $this->receipient = $receipient;
        
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderMailErmDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
