<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgency StructType
 * @subpackage Structs
 */
class MidocoAgency extends AgencyDetailDTO
{
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO[]
     */
    protected ?array $MidocoAgencyCommission = null;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoCustomerPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerPayment
     * @var \Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO $MidocoCustomerPayment = null;
    /**
     * The cooperationName
     * @var string|null
     */
    protected ?string $cooperationName = null;
    /**
     * Constructor method for MidocoAgency
     * @uses MidocoAgency::setMidocoAgencyCommission()
     * @uses MidocoAgency::setMidocoCrmCustomer()
     * @uses MidocoAgency::setMidocoCustomerPayment()
     * @uses MidocoAgency::setCooperationName()
     * @param \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @param string $cooperationName
     */
    public function __construct(?array $midocoAgencyCommission = null, ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null, ?string $cooperationName = null)
    {
        $this
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCustomerPayment($midocoCustomerPayment)
            ->setCooperationName($cooperationName);
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): ?array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAgencyMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$midocoAgencyMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($midocoAgencyMidocoAgencyCommissionItem) ? get_class($midocoAgencyMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($midocoAgencyMidocoAgencyCommissionItem), var_export($midocoAgencyMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAgency
     */
    public function setMidocoAgencyCommission(?array $midocoAgencyCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAgency
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAgency
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCustomerPayment value
     * @return \Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO|null
     */
    public function getMidocoCustomerPayment(): ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO
    {
        return $this->MidocoCustomerPayment;
    }
    /**
     * Set MidocoCustomerPayment value
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAgency
     */
    public function setMidocoCustomerPayment(?\Pggns\MidocoApi\Documents\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null): self
    {
        $this->MidocoCustomerPayment = $midocoCustomerPayment;
        
        return $this;
    }
    /**
     * Get cooperationName value
     * @return string|null
     */
    public function getCooperationName(): ?string
    {
        return $this->cooperationName;
    }
    /**
     * Set cooperationName value
     * @param string $cooperationName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAgency
     */
    public function setCooperationName(?string $cooperationName = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationName) && !is_string($cooperationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationName, true), gettype($cooperationName)), __LINE__);
        }
        $this->cooperationName = $cooperationName;
        
        return $this;
    }
}
