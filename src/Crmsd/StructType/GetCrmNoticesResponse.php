<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmNoticesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCrmNotices --- returns the list of order Notices for a customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmNoticesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
    /**
     * The sortOrder
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * The orgunitName
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * The selection
     * @var string|null
     */
    protected ?string $selection = null;
    /**
     * The fromFinishTimestamp
     * @var string|null
     */
    protected ?string $fromFinishTimestamp = null;
    /**
     * The untilFinishTimestamp
     * @var string|null
     */
    protected ?string $untilFinishTimestamp = null;
    /**
     * The fromCreationTimestamp
     * @var string|null
     */
    protected ?string $fromCreationTimestamp = null;
    /**
     * The untilCreationTimestamp
     * @var string|null
     */
    protected ?string $untilCreationTimestamp = null;
    /**
     * The delegationRole
     * @var string|null
     */
    protected ?string $delegationRole = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The finishUser
     * @var int|null
     */
    protected ?int $finishUser = null;
    /**
     * Constructor method for GetCrmNoticesResponse
     * @uses GetCrmNoticesResponse::setMidocoCrmNotice()
     * @uses GetCrmNoticesResponse::setSortOrder()
     * @uses GetCrmNoticesResponse::setOrgunitName()
     * @uses GetCrmNoticesResponse::setSelection()
     * @uses GetCrmNoticesResponse::setFromFinishTimestamp()
     * @uses GetCrmNoticesResponse::setUntilFinishTimestamp()
     * @uses GetCrmNoticesResponse::setFromCreationTimestamp()
     * @uses GetCrmNoticesResponse::setUntilCreationTimestamp()
     * @uses GetCrmNoticesResponse::setDelegationRole()
     * @uses GetCrmNoticesResponse::setNotice()
     * @uses GetCrmNoticesResponse::setTaskType()
     * @uses GetCrmNoticesResponse::setFinishUser()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param string $sortOrder
     * @param string $orgunitName
     * @param string $selection
     * @param string $fromFinishTimestamp
     * @param string $untilFinishTimestamp
     * @param string $fromCreationTimestamp
     * @param string $untilCreationTimestamp
     * @param string $delegationRole
     * @param string $notice
     * @param string $taskType
     * @param int $finishUser
     */
    public function __construct(?array $midocoCrmNotice = null, ?string $sortOrder = null, ?string $orgunitName = null, ?string $selection = null, ?string $fromFinishTimestamp = null, ?string $untilFinishTimestamp = null, ?string $fromCreationTimestamp = null, ?string $untilCreationTimestamp = null, ?string $delegationRole = null, ?string $notice = null, ?string $taskType = null, ?int $finishUser = null)
    {
        $this
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setSortOrder($sortOrder)
            ->setOrgunitName($orgunitName)
            ->setSelection($selection)
            ->setFromFinishTimestamp($fromFinishTimestamp)
            ->setUntilFinishTimestamp($untilFinishTimestamp)
            ->setFromCreationTimestamp($fromCreationTimestamp)
            ->setUntilCreationTimestamp($untilCreationTimestamp)
            ->setDelegationRole($delegationRole)
            ->setNotice($notice)
            ->setTaskType($taskType)
            ->setFinishUser($finishUser);
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): ?array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmNoticesResponseMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$getCrmNoticesResponseMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($getCrmNoticesResponseMidocoCrmNoticeItem) ? get_class($getCrmNoticesResponseMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($getCrmNoticesResponseMidocoCrmNoticeItem), var_export($getCrmNoticesResponseMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setMidocoCrmNotice(?array $midocoCrmNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $sortOrder
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
    /**
     * Get selection value
     * @return string|null
     */
    public function getSelection(): ?string
    {
        return $this->selection;
    }
    /**
     * Set selection value
     * @param string $selection
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setSelection(?string $selection = null): self
    {
        // validation for constraint: string
        if (!is_null($selection) && !is_string($selection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selection, true), gettype($selection)), __LINE__);
        }
        $this->selection = $selection;
        
        return $this;
    }
    /**
     * Get fromFinishTimestamp value
     * @return string|null
     */
    public function getFromFinishTimestamp(): ?string
    {
        return $this->fromFinishTimestamp;
    }
    /**
     * Set fromFinishTimestamp value
     * @param string $fromFinishTimestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setFromFinishTimestamp(?string $fromFinishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($fromFinishTimestamp) && !is_string($fromFinishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromFinishTimestamp, true), gettype($fromFinishTimestamp)), __LINE__);
        }
        $this->fromFinishTimestamp = $fromFinishTimestamp;
        
        return $this;
    }
    /**
     * Get untilFinishTimestamp value
     * @return string|null
     */
    public function getUntilFinishTimestamp(): ?string
    {
        return $this->untilFinishTimestamp;
    }
    /**
     * Set untilFinishTimestamp value
     * @param string $untilFinishTimestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setUntilFinishTimestamp(?string $untilFinishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($untilFinishTimestamp) && !is_string($untilFinishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($untilFinishTimestamp, true), gettype($untilFinishTimestamp)), __LINE__);
        }
        $this->untilFinishTimestamp = $untilFinishTimestamp;
        
        return $this;
    }
    /**
     * Get fromCreationTimestamp value
     * @return string|null
     */
    public function getFromCreationTimestamp(): ?string
    {
        return $this->fromCreationTimestamp;
    }
    /**
     * Set fromCreationTimestamp value
     * @param string $fromCreationTimestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setFromCreationTimestamp(?string $fromCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCreationTimestamp) && !is_string($fromCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCreationTimestamp, true), gettype($fromCreationTimestamp)), __LINE__);
        }
        $this->fromCreationTimestamp = $fromCreationTimestamp;
        
        return $this;
    }
    /**
     * Get untilCreationTimestamp value
     * @return string|null
     */
    public function getUntilCreationTimestamp(): ?string
    {
        return $this->untilCreationTimestamp;
    }
    /**
     * Set untilCreationTimestamp value
     * @param string $untilCreationTimestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setUntilCreationTimestamp(?string $untilCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($untilCreationTimestamp) && !is_string($untilCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($untilCreationTimestamp, true), gettype($untilCreationTimestamp)), __LINE__);
        }
        $this->untilCreationTimestamp = $untilCreationTimestamp;
        
        return $this;
    }
    /**
     * Get delegationRole value
     * @return string|null
     */
    public function getDelegationRole(): ?string
    {
        return $this->delegationRole;
    }
    /**
     * Set delegationRole value
     * @param string $delegationRole
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setDelegationRole(?string $delegationRole = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationRole) && !is_string($delegationRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationRole, true), gettype($delegationRole)), __LINE__);
        }
        $this->delegationRole = $delegationRole;
        
        return $this;
    }
    /**
     * Get notice value
     * @return string|null
     */
    public function getNotice(): ?string
    {
        return $this->notice;
    }
    /**
     * Set notice value
     * @param string $notice
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setNotice(?string $notice = null): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        $this->notice = $notice;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
    /**
     * Get finishUser value
     * @return int|null
     */
    public function getFinishUser(): ?int
    {
        return $this->finishUser;
    }
    /**
     * Set finishUser value
     * @param int $finishUser
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticesResponse
     */
    public function setFinishUser(?int $finishUser = null): self
    {
        // validation for constraint: int
        if (!is_null($finishUser) && !(is_int($finishUser) || ctype_digit($finishUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finishUser, true), gettype($finishUser)), __LINE__);
        }
        $this->finishUser = $finishUser;
        
        return $this;
    }
}
