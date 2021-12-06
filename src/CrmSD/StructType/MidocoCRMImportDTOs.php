<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCRMImportDTOs StructType
 * @subpackage Structs
 */
class MidocoCRMImportDTOs extends AbstractStructBase
{
    /**
     * The MidocoImportCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportCustomer
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer[]
     */
    protected ?array $MidocoImportCustomer = null;
    /**
     * The MidocoImportCCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportCCard
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard[]
     */
    protected ?array $MidocoImportCCard = null;
    /**
     * The MidocoImportAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportAttribute
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute[]
     */
    protected ?array $MidocoImportAttribute = null;
    /**
     * The MidocoImportNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportNotice
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice[]
     */
    protected ?array $MidocoImportNotice = null;
    /**
     * The MidocoImportDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportDebitor
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor[]
     */
    protected ?array $MidocoImportDebitor = null;
    /**
     * The MidocoImportHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportHistory
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory[]
     */
    protected ?array $MidocoImportHistory = null;
    /**
     * The MidocoImportContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportContactHistory
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory[]
     */
    protected ?array $MidocoImportContactHistory = null;
    /**
     * The MidocoImportAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportAddress
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress[]
     */
    protected ?array $MidocoImportAddress = null;
    /**
     * The MidocoImportContactType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportContactType
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType[]
     */
    protected ?array $MidocoImportContactType = null;
    /**
     * The MidocoImportAgencyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoImportAgencyInfo
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo[]
     */
    protected ?array $MidocoImportAgencyInfo = null;
    /**
     * Constructor method for MidocoCRMImportDTOs
     * @uses MidocoCRMImportDTOs::setMidocoImportCustomer()
     * @uses MidocoCRMImportDTOs::setMidocoImportCCard()
     * @uses MidocoCRMImportDTOs::setMidocoImportAttribute()
     * @uses MidocoCRMImportDTOs::setMidocoImportNotice()
     * @uses MidocoCRMImportDTOs::setMidocoImportDebitor()
     * @uses MidocoCRMImportDTOs::setMidocoImportHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportAddress()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactType()
     * @uses MidocoCRMImportDTOs::setMidocoImportAgencyInfo()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard[] $midocoImportCCard
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice[] $midocoImportNotice
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory[] $midocoImportHistory
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress[] $midocoImportAddress
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType[] $midocoImportContactType
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     */
    public function __construct(?array $midocoImportCustomer = null, ?array $midocoImportCCard = null, ?array $midocoImportAttribute = null, ?array $midocoImportNotice = null, ?array $midocoImportDebitor = null, ?array $midocoImportHistory = null, ?array $midocoImportContactHistory = null, ?array $midocoImportAddress = null, ?array $midocoImportContactType = null, ?array $midocoImportAgencyInfo = null)
    {
        $this
            ->setMidocoImportCustomer($midocoImportCustomer)
            ->setMidocoImportCCard($midocoImportCCard)
            ->setMidocoImportAttribute($midocoImportAttribute)
            ->setMidocoImportNotice($midocoImportNotice)
            ->setMidocoImportDebitor($midocoImportDebitor)
            ->setMidocoImportHistory($midocoImportHistory)
            ->setMidocoImportContactHistory($midocoImportContactHistory)
            ->setMidocoImportAddress($midocoImportAddress)
            ->setMidocoImportContactType($midocoImportContactType)
            ->setMidocoImportAgencyInfo($midocoImportAgencyInfo);
    }
    /**
     * Get MidocoImportCustomer value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer[]
     */
    public function getMidocoImportCustomer(): ?array
    {
        return $this->MidocoImportCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCustomerForArrayConstraintsFromSetMidocoImportCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCustomerItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCustomerItem) ? get_class($midocoCRMImportDTOsMidocoImportCustomerItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCustomerItem), var_export($midocoCRMImportDTOsMidocoImportCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCustomer(?array $midocoImportCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCustomerArrayErrorMessage = self::validateMidocoImportCustomerForArrayConstraintsFromSetMidocoImportCustomer($midocoImportCustomer))) {
            throw new InvalidArgumentException($midocoImportCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCustomer = $midocoImportCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCustomer(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportCCard value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard[]
     */
    public function getMidocoImportCCard(): ?array
    {
        return $this->MidocoImportCCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportCCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCCardForArrayConstraintsFromSetMidocoImportCCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCCardItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCCardItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCCardItem) ? get_class($midocoCRMImportDTOsMidocoImportCCardItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCCardItem), var_export($midocoCRMImportDTOsMidocoImportCCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard[] $midocoImportCCard
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCCard(?array $midocoImportCCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCCardArrayErrorMessage = self::validateMidocoImportCCardForArrayConstraintsFromSetMidocoImportCCard($midocoImportCCard))) {
            throw new InvalidArgumentException($midocoImportCCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCCard = $midocoImportCCard;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCCard(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportCCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAttribute value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute[]
     */
    public function getMidocoImportAttribute(): ?array
    {
        return $this->MidocoImportAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAttributeForArrayConstraintsFromSetMidocoImportAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAttributeItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAttributeItem) ? get_class($midocoCRMImportDTOsMidocoImportAttributeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAttributeItem), var_export($midocoCRMImportDTOsMidocoImportAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAttribute(?array $midocoImportAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAttributeArrayErrorMessage = self::validateMidocoImportAttributeForArrayConstraintsFromSetMidocoImportAttribute($midocoImportAttribute))) {
            throw new InvalidArgumentException($midocoImportAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAttribute = $midocoImportAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAttribute(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportNotice value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice[]
     */
    public function getMidocoImportNotice(): ?array
    {
        return $this->MidocoImportNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportNoticeForArrayConstraintsFromSetMidocoImportNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportNoticeItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportNoticeItem) ? get_class($midocoCRMImportDTOsMidocoImportNoticeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportNoticeItem), var_export($midocoCRMImportDTOsMidocoImportNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice[] $midocoImportNotice
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportNotice(?array $midocoImportNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportNoticeArrayErrorMessage = self::validateMidocoImportNoticeForArrayConstraintsFromSetMidocoImportNotice($midocoImportNotice))) {
            throw new InvalidArgumentException($midocoImportNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportNotice = $midocoImportNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportNotice(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportDebitor value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor[]
     */
    public function getMidocoImportDebitor(): ?array
    {
        return $this->MidocoImportDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportDebitorForArrayConstraintsFromSetMidocoImportDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportDebitorItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportDebitorItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportDebitorItem) ? get_class($midocoCRMImportDTOsMidocoImportDebitorItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportDebitorItem), var_export($midocoCRMImportDTOsMidocoImportDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportDebitor(?array $midocoImportDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportDebitorArrayErrorMessage = self::validateMidocoImportDebitorForArrayConstraintsFromSetMidocoImportDebitor($midocoImportDebitor))) {
            throw new InvalidArgumentException($midocoImportDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportDebitor = $midocoImportDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportDebitor(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor) {
            throw new InvalidArgumentException(sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportDebitor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportHistory value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory[]
     */
    public function getMidocoImportHistory(): ?array
    {
        return $this->MidocoImportHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportHistoryForArrayConstraintsFromSetMidocoImportHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportHistoryItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportHistoryItem), var_export($midocoCRMImportDTOsMidocoImportHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory[] $midocoImportHistory
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportHistory(?array $midocoImportHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportHistoryArrayErrorMessage = self::validateMidocoImportHistoryForArrayConstraintsFromSetMidocoImportHistory($midocoImportHistory))) {
            throw new InvalidArgumentException($midocoImportHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportHistory = $midocoImportHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportHistory(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactHistory value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory[]
     */
    public function getMidocoImportContactHistory(): ?array
    {
        return $this->MidocoImportContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactHistoryForArrayConstraintsFromSetMidocoImportContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactHistoryItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactHistoryItem), var_export($midocoCRMImportDTOsMidocoImportContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactHistory(?array $midocoImportContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactHistoryArrayErrorMessage = self::validateMidocoImportContactHistoryForArrayConstraintsFromSetMidocoImportContactHistory($midocoImportContactHistory))) {
            throw new InvalidArgumentException($midocoImportContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactHistory = $midocoImportContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactHistory(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAddress value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress[]
     */
    public function getMidocoImportAddress(): ?array
    {
        return $this->MidocoImportAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAddressForArrayConstraintsFromSetMidocoImportAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAddressItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAddressItem) ? get_class($midocoCRMImportDTOsMidocoImportAddressItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAddressItem), var_export($midocoCRMImportDTOsMidocoImportAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress[] $midocoImportAddress
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAddress(?array $midocoImportAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAddressArrayErrorMessage = self::validateMidocoImportAddressForArrayConstraintsFromSetMidocoImportAddress($midocoImportAddress))) {
            throw new InvalidArgumentException($midocoImportAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAddress = $midocoImportAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAddress(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactType value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType[]
     */
    public function getMidocoImportContactType(): ?array
    {
        return $this->MidocoImportContactType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportContactType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactTypeForArrayConstraintsFromSetMidocoImportContactType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactTypeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactTypeItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactTypeItem) ? get_class($midocoCRMImportDTOsMidocoImportContactTypeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactTypeItem), var_export($midocoCRMImportDTOsMidocoImportContactTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType[] $midocoImportContactType
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactType(?array $midocoImportContactType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactTypeArrayErrorMessage = self::validateMidocoImportContactTypeForArrayConstraintsFromSetMidocoImportContactType($midocoImportContactType))) {
            throw new InvalidArgumentException($midocoImportContactTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactType = $midocoImportContactType;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactType(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAgencyInfo value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo[]
     */
    public function getMidocoImportAgencyInfo(): ?array
    {
        return $this->MidocoImportAgencyInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAgencyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAgencyInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAgencyInfoForArrayConstraintsFromSetMidocoImportAgencyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAgencyInfoItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAgencyInfoItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAgencyInfoItem) ? get_class($midocoCRMImportDTOsMidocoImportAgencyInfoItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAgencyInfoItem), var_export($midocoCRMImportDTOsMidocoImportAgencyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAgencyInfo(?array $midocoImportAgencyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAgencyInfoArrayErrorMessage = self::validateMidocoImportAgencyInfoForArrayConstraintsFromSetMidocoImportAgencyInfo($midocoImportAgencyInfo))) {
            throw new InvalidArgumentException($midocoImportAgencyInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAgencyInfo = $midocoImportAgencyInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAgencyInfo(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoImportAgencyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAgencyInfo[] = $item;
        
        return $this;
    }
}
