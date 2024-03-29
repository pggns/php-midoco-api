<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppCMappingChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SuppCMappingChgLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The mainSupplierId
     * @var string|null
     */
    protected ?string $mainSupplierId = null;
    /**
     * The suppCancelCMappingId
     * @var int|null
     */
    protected ?int $suppCancelCMappingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for SuppCMappingChgLogDTO
     * @uses SuppCMappingChgLogDTO::setChangeId()
     * @uses SuppCMappingChgLogDTO::setMainSupplierId()
     * @uses SuppCMappingChgLogDTO::setSuppCancelCMappingId()
     * @uses SuppCMappingChgLogDTO::setSupplierId()
     * @uses SuppCMappingChgLogDTO::setTimestamp()
     * @uses SuppCMappingChgLogDTO::setUserId()
     * @param int $changeId
     * @param string $mainSupplierId
     * @param int $suppCancelCMappingId
     * @param string $supplierId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?string $mainSupplierId = null, ?int $suppCancelCMappingId = null, ?string $supplierId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setMainSupplierId($mainSupplierId)
            ->setSuppCancelCMappingId($suppCancelCMappingId)
            ->setSupplierId($supplierId)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
    }
    /**
     * Get mainSupplierId value
     * @return string|null
     */
    public function getMainSupplierId(): ?string
    {
        return $this->mainSupplierId;
    }
    /**
     * Set mainSupplierId value
     * @param string $mainSupplierId
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
     */
    public function setMainSupplierId(?string $mainSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($mainSupplierId) && !is_string($mainSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainSupplierId, true), gettype($mainSupplierId)), __LINE__);
        }
        $this->mainSupplierId = $mainSupplierId;
        
        return $this;
    }
    /**
     * Get suppCancelCMappingId value
     * @return int|null
     */
    public function getSuppCancelCMappingId(): ?int
    {
        return $this->suppCancelCMappingId;
    }
    /**
     * Set suppCancelCMappingId value
     * @param int $suppCancelCMappingId
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
     */
    public function setSuppCancelCMappingId(?int $suppCancelCMappingId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppCancelCMappingId) && !(is_int($suppCancelCMappingId) || ctype_digit($suppCancelCMappingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppCancelCMappingId, true), gettype($suppCancelCMappingId)), __LINE__);
        }
        $this->suppCancelCMappingId = $suppCancelCMappingId;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Documents\StructType\SuppCMappingChgLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
