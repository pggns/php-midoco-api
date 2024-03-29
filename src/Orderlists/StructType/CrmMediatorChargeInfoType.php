<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMediatorChargeInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmMediatorChargeInfoType extends CrmMediatorChargeDTO
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The isCredit
     * @var bool|null
     */
    protected ?bool $isCredit = null;
    /**
     * The isInteractive
     * @var bool|null
     */
    protected ?bool $isInteractive = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The schedulePeriod
     * @var int|null
     */
    protected ?int $schedulePeriod = null;
    /**
     * The useVat
     * @var bool|null
     */
    protected ?bool $useVat = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * Constructor method for CrmMediatorChargeInfoType
     * @uses CrmMediatorChargeInfoType::setAccountId()
     * @uses CrmMediatorChargeInfoType::setIsCredit()
     * @uses CrmMediatorChargeInfoType::setIsInteractive()
     * @uses CrmMediatorChargeInfoType::setPlanId()
     * @uses CrmMediatorChargeInfoType::setSchedulePeriod()
     * @uses CrmMediatorChargeInfoType::setUseVat()
     * @uses CrmMediatorChargeInfoType::setDescription()
     * @uses CrmMediatorChargeInfoType::setNettoAmount()
     * @param string $accountId
     * @param bool $isCredit
     * @param bool $isInteractive
     * @param string $planId
     * @param int $schedulePeriod
     * @param bool $useVat
     * @param string $description
     * @param float $nettoAmount
     */
    public function __construct(?string $accountId = null, ?bool $isCredit = null, ?bool $isInteractive = null, ?string $planId = null, ?int $schedulePeriod = null, ?bool $useVat = null, ?string $description = null, ?float $nettoAmount = null)
    {
        $this
            ->setAccountId($accountId)
            ->setIsCredit($isCredit)
            ->setIsInteractive($isInteractive)
            ->setPlanId($planId)
            ->setSchedulePeriod($schedulePeriod)
            ->setUseVat($useVat)
            ->setDescription($description)
            ->setNettoAmount($nettoAmount);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get isCredit value
     * @return bool|null
     */
    public function getIsCredit(): ?bool
    {
        return $this->isCredit;
    }
    /**
     * Set isCredit value
     * @param bool $isCredit
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setIsCredit(?bool $isCredit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCredit) && !is_bool($isCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCredit, true), gettype($isCredit)), __LINE__);
        }
        $this->isCredit = $isCredit;
        
        return $this;
    }
    /**
     * Get isInteractive value
     * @return bool|null
     */
    public function getIsInteractive(): ?bool
    {
        return $this->isInteractive;
    }
    /**
     * Set isInteractive value
     * @param bool $isInteractive
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setIsInteractive(?bool $isInteractive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInteractive) && !is_bool($isInteractive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInteractive, true), gettype($isInteractive)), __LINE__);
        }
        $this->isInteractive = $isInteractive;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get schedulePeriod value
     * @return int|null
     */
    public function getSchedulePeriod(): ?int
    {
        return $this->schedulePeriod;
    }
    /**
     * Set schedulePeriod value
     * @param int $schedulePeriod
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setSchedulePeriod(?int $schedulePeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($schedulePeriod) && !(is_int($schedulePeriod) || ctype_digit($schedulePeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($schedulePeriod, true), gettype($schedulePeriod)), __LINE__);
        }
        $this->schedulePeriod = $schedulePeriod;
        
        return $this;
    }
    /**
     * Get useVat value
     * @return bool|null
     */
    public function getUseVat(): ?bool
    {
        return $this->useVat;
    }
    /**
     * Set useVat value
     * @param bool $useVat
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setUseVat(?bool $useVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useVat) && !is_bool($useVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useVat, true), gettype($useVat)), __LINE__);
        }
        $this->useVat = $useVat;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmMediatorChargeInfoType
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
}
