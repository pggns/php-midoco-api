<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerData StructType
 * @subpackage Structs
 */
class MidocoCustomerData extends CustomerDTO
{
    /**
     * The MidocoCrmPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPerson
     * @var \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO[]
     */
    protected ?array $MidocoCrmPerson = null;
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard[]
     */
    protected ?array $MidocoCrmCcCard = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO[]
     */
    protected ?array $MidocoCrmCompany = null;
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO[]
     */
    protected ?array $MidocoDebitor = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory[]
     */
    protected ?array $MidocoContactHistory = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment[]
     */
    protected ?array $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
    /**
     * Constructor method for MidocoCustomerData
     * @uses MidocoCustomerData::setMidocoCrmPerson()
     * @uses MidocoCustomerData::setMidocoCrmNotice()
     * @uses MidocoCustomerData::setMidocoCrmAddress()
     * @uses MidocoCustomerData::setMidocoCrmCcCard()
     * @uses MidocoCustomerData::setMidocoCrmCompany()
     * @uses MidocoCustomerData::setMidocoCrmCriteria()
     * @uses MidocoCustomerData::setMidocoCrmDebitCard()
     * @uses MidocoCustomerData::setMidocoDebitor()
     * @uses MidocoCustomerData::setMidocoContactHistory()
     * @uses MidocoCustomerData::setMidocoCrmCustomerPayment()
     * @uses MidocoCustomerData::setMidocoCustomerTravel()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO[] $midocoCrmPerson
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO[] $midocoCrmCompany
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO[] $midocoDebitor
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment[] $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     */
    public function __construct(?array $midocoCrmPerson = null, ?array $midocoCrmNotice = null, ?array $midocoCrmAddress = null, ?array $midocoCrmCcCard = null, ?array $midocoCrmCompany = null, ?array $midocoCrmCriteria = null, ?array $midocoCrmDebitCard = null, ?array $midocoDebitor = null, ?array $midocoContactHistory = null, ?array $midocoCrmCustomerPayment = null, ?array $midocoCustomerTravel = null)
    {
        $this
            ->setMidocoCrmPerson($midocoCrmPerson)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmCompany($midocoCrmCompany)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCustomerTravel($midocoCustomerTravel);
    }
    /**
     * Get MidocoCrmPerson value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO[]
     */
    public function getMidocoCrmPerson(): ?array
    {
        return $this->MidocoCrmPerson;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPerson method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonForArrayConstraintsFromSetMidocoCrmPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmPersonItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmPersonItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmPersonItem) ? get_class($midocoCustomerDataMidocoCrmPersonItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmPersonItem), var_export($midocoCustomerDataMidocoCrmPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPerson property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO[] $midocoCrmPerson
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmPerson(?array $midocoCrmPerson = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonArrayErrorMessage = self::validateMidocoCrmPersonForArrayConstraintsFromSetMidocoCrmPerson($midocoCrmPerson))) {
            throw new InvalidArgumentException($midocoCrmPersonArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPerson = $midocoCrmPerson;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmPerson(\Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPerson property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmPersonDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPerson[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): ?array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmNoticeItem) ? get_class($midocoCustomerDataMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmNoticeItem), var_export($midocoCustomerDataMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmNotice(?array $midocoCrmNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmAddressItem) ? get_class($midocoCustomerDataMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmAddressItem), var_export($midocoCustomerDataMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): ?array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCcCardItem) ? get_class($midocoCustomerDataMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCcCardItem), var_export($midocoCustomerDataMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCcCard(?array $midocoCrmCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO[]
     */
    public function getMidocoCrmCompany(): ?array
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCompany method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCompany method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCompanyForArrayConstraintsFromSetMidocoCrmCompany(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCompanyItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCompanyItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCompanyItem) ? get_class($midocoCustomerDataMidocoCrmCompanyItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCompanyItem), var_export($midocoCustomerDataMidocoCrmCompanyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCompany property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCompany value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO[] $midocoCrmCompany
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCompany(?array $midocoCrmCompany = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCompanyArrayErrorMessage = self::validateMidocoCrmCompanyForArrayConstraintsFromSetMidocoCrmCompany($midocoCrmCompany))) {
            throw new InvalidArgumentException($midocoCrmCompanyArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCompany value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCompany(\Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCompany property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmCompanyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCompany[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCriteriaItem) ? get_class($midocoCustomerDataMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCriteriaItem), var_export($midocoCustomerDataMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CrmCriteriaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmDebitCardItem) ? get_class($midocoCustomerDataMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmDebitCardItem), var_export($midocoCustomerDataMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): ?array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoDebitorItem instanceof \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoDebitorItem) ? get_class($midocoCustomerDataMidocoDebitorItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoDebitorItem), var_export($midocoCustomerDataMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoDebitor(?array $midocoDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\Api\Order\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): ?array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoContactHistoryItem) ? get_class($midocoCustomerDataMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoContactHistoryItem), var_export($midocoCustomerDataMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoContactHistory(?array $midocoContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment[]
     */
    public function getMidocoCrmCustomerPayment(): ?array
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCustomerPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerPaymentForArrayConstraintsFromSetMidocoCrmCustomerPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCustomerPaymentItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCustomerPaymentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCustomerPaymentItem) ? get_class($midocoCustomerDataMidocoCrmCustomerPaymentItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCustomerPaymentItem), var_export($midocoCustomerDataMidocoCrmCustomerPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment[] $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCustomerPayment(?array $midocoCrmCustomerPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerPaymentArrayErrorMessage = self::validateMidocoCrmCustomerPaymentForArrayConstraintsFromSetMidocoCrmCustomerPayment($midocoCrmCustomerPayment))) {
            throw new InvalidArgumentException($midocoCrmCustomerPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCustomerPayment(\Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCrmCustomerPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerPayment[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): ?array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCustomerTravelItem) ? get_class($midocoCustomerDataMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCustomerTravelItem), var_export($midocoCustomerDataMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function setMidocoCustomerTravel(?array $midocoCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerData
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
}
