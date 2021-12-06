<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingPositionType StructType
 * @subpackage Structs
 */
class MidocoBillingPositionType extends BillingPositionDTO
{
    /**
     * The MidocoBillingPositionAttribute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingPositionAttribute
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO $MidocoBillingPositionAttribute = null;
    /**
     * The MidocoBillingPositionRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPositionRemark
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO[]
     */
    protected ?array $MidocoBillingPositionRemark = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction[]
     */
    protected ?array $MidocoOnlinePaymentTransaction = null;
    /**
     * The MidocoBillingVoidPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingVoidPosition
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $MidocoBillingVoidPosition = null;
    /**
     * The MidocoBillingPositionDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPositionDbiInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo[]
     */
    protected ?array $MidocoBillingPositionDbiInfo = null;
    /**
     * The MidocoDBDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails $MidocoDBDetails = null;
    /**
     * The refCcNumber
     * @var string|null
     */
    protected ?string $refCcNumber = null;
    /**
     * The refCcType
     * @var string|null
     */
    protected ?string $refCcType = null;
    /**
     * The refCcValid
     * @var string|null
     */
    protected ?string $refCcValid = null;
    /**
     * Constructor method for MidocoBillingPositionType
     * @uses MidocoBillingPositionType::setMidocoBillingPositionAttribute()
     * @uses MidocoBillingPositionType::setMidocoBillingPositionRemark()
     * @uses MidocoBillingPositionType::setMidocoOnlinePaymentTransaction()
     * @uses MidocoBillingPositionType::setMidocoBillingVoidPosition()
     * @uses MidocoBillingPositionType::setMidocoBillingPositionDbiInfo()
     * @uses MidocoBillingPositionType::setMidocoDBDetails()
     * @uses MidocoBillingPositionType::setRefCcNumber()
     * @uses MidocoBillingPositionType::setRefCcType()
     * @uses MidocoBillingPositionType::setRefCcValid()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO $midocoBillingPositionAttribute
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO[] $midocoBillingPositionRemark
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $midocoBillingVoidPosition
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails $midocoDBDetails
     * @param string $refCcNumber
     * @param string $refCcType
     * @param string $refCcValid
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO $midocoBillingPositionAttribute = null, ?array $midocoBillingPositionRemark = null, ?array $midocoOnlinePaymentTransaction = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $midocoBillingVoidPosition = null, ?array $midocoBillingPositionDbiInfo = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails $midocoDBDetails = null, ?string $refCcNumber = null, ?string $refCcType = null, ?string $refCcValid = null)
    {
        $this
            ->setMidocoBillingPositionAttribute($midocoBillingPositionAttribute)
            ->setMidocoBillingPositionRemark($midocoBillingPositionRemark)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction)
            ->setMidocoBillingVoidPosition($midocoBillingVoidPosition)
            ->setMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo)
            ->setMidocoDBDetails($midocoDBDetails)
            ->setRefCcNumber($refCcNumber)
            ->setRefCcType($refCcType)
            ->setRefCcValid($refCcValid);
    }
    /**
     * Get MidocoBillingPositionAttribute value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO|null
     */
    public function getMidocoBillingPositionAttribute(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO
    {
        return $this->MidocoBillingPositionAttribute;
    }
    /**
     * Set MidocoBillingPositionAttribute value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO $midocoBillingPositionAttribute
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoBillingPositionAttribute(?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionAttribDTO $midocoBillingPositionAttribute = null): self
    {
        $this->MidocoBillingPositionAttribute = $midocoBillingPositionAttribute;
        
        return $this;
    }
    /**
     * Get MidocoBillingPositionRemark value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO[]
     */
    public function getMidocoBillingPositionRemark(): ?array
    {
        return $this->MidocoBillingPositionRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPositionRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionRemarkForArrayConstraintsFromSetMidocoBillingPositionRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingPositionTypeMidocoBillingPositionRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoBillingPositionTypeMidocoBillingPositionRemarkItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO) {
                $invalidValues[] = is_object($midocoBillingPositionTypeMidocoBillingPositionRemarkItem) ? get_class($midocoBillingPositionTypeMidocoBillingPositionRemarkItem) : sprintf('%s(%s)', gettype($midocoBillingPositionTypeMidocoBillingPositionRemarkItem), var_export($midocoBillingPositionTypeMidocoBillingPositionRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO[] $midocoBillingPositionRemark
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoBillingPositionRemark(?array $midocoBillingPositionRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionRemarkArrayErrorMessage = self::validateMidocoBillingPositionRemarkForArrayConstraintsFromSetMidocoBillingPositionRemark($midocoBillingPositionRemark))) {
            throw new InvalidArgumentException($midocoBillingPositionRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionRemark = $midocoBillingPositionRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function addToMidocoBillingPositionRemark(\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPositionRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionRemark[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction[]
     */
    public function getMidocoOnlinePaymentTransaction(): ?array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem) ? get_class($midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem), var_export($midocoBillingPositionTypeMidocoOnlinePaymentTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoOnlinePaymentTransaction(?array $midocoOnlinePaymentTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function addToMidocoOnlinePaymentTransaction(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingVoidPosition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingVoidPosition(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingVoidPosition;
    }
    /**
     * Set MidocoBillingVoidPosition value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $midocoBillingVoidPosition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoBillingVoidPosition(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $midocoBillingVoidPosition = null): self
    {
        $this->MidocoBillingVoidPosition = $midocoBillingVoidPosition;
        
        return $this;
    }
    /**
     * Get MidocoBillingPositionDbiInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo[]
     */
    public function getMidocoBillingPositionDbiInfo(): ?array
    {
        return $this->MidocoBillingPositionDbiInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPositionDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionDbiInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionDbiInfoForArrayConstraintsFromSetMidocoBillingPositionDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem) {
            // validation for constraint: itemType
            if (!$midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo) {
                $invalidValues[] = is_object($midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem) ? get_class($midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem) : sprintf('%s(%s)', gettype($midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem), var_export($midocoBillingPositionTypeMidocoBillingPositionDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoBillingPositionDbiInfo(?array $midocoBillingPositionDbiInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionDbiInfoArrayErrorMessage = self::validateMidocoBillingPositionDbiInfoForArrayConstraintsFromSetMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo))) {
            throw new InvalidArgumentException($midocoBillingPositionDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo = $midocoBillingPositionDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function addToMidocoBillingPositionDbiInfo(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDBDetails value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails|null
     */
    public function getMidocoDBDetails(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails
    {
        return $this->MidocoDBDetails;
    }
    /**
     * Set MidocoDBDetails value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails $midocoDBDetails
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setMidocoDBDetails(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDBDetails $midocoDBDetails = null): self
    {
        $this->MidocoDBDetails = $midocoDBDetails;
        
        return $this;
    }
    /**
     * Get refCcNumber value
     * @return string|null
     */
    public function getRefCcNumber(): ?string
    {
        return $this->refCcNumber;
    }
    /**
     * Set refCcNumber value
     * @param string $refCcNumber
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setRefCcNumber(?string $refCcNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($refCcNumber) && !is_string($refCcNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refCcNumber, true), gettype($refCcNumber)), __LINE__);
        }
        $this->refCcNumber = $refCcNumber;
        
        return $this;
    }
    /**
     * Get refCcType value
     * @return string|null
     */
    public function getRefCcType(): ?string
    {
        return $this->refCcType;
    }
    /**
     * Set refCcType value
     * @param string $refCcType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setRefCcType(?string $refCcType = null): self
    {
        // validation for constraint: string
        if (!is_null($refCcType) && !is_string($refCcType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refCcType, true), gettype($refCcType)), __LINE__);
        }
        $this->refCcType = $refCcType;
        
        return $this;
    }
    /**
     * Get refCcValid value
     * @return string|null
     */
    public function getRefCcValid(): ?string
    {
        return $this->refCcValid;
    }
    /**
     * Set refCcValid value
     * @param string $refCcValid
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType
     */
    public function setRefCcValid(?string $refCcValid = null): self
    {
        // validation for constraint: string
        if (!is_null($refCcValid) && !is_string($refCcValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refCcValid, true), gettype($refCcValid)), __LINE__);
        }
        $this->refCcValid = $refCcValid;
        
        return $this;
    }
}
