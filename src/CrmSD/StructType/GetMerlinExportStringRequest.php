<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMerlinExportStringRequest StructType
 * @subpackage Structs
 */
class GetMerlinExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoSelectedCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSelectedCrmPersonTraveller
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    protected ?array $MidocoSelectedCrmPersonTraveller = null;
    /**
     * The exportBirthday
     * @var bool|null
     */
    protected ?bool $exportBirthday = null;
    /**
     * The exportAge
     * @var bool|null
     */
    protected ?bool $exportAge = null;
    /**
     * Constructor method for GetMerlinExportStringRequest
     * @uses GetMerlinExportStringRequest::setMidocoCrmCustomer()
     * @uses GetMerlinExportStringRequest::setMidocoSelectedCrmPersonTraveller()
     * @uses GetMerlinExportStringRequest::setExportBirthday()
     * @uses GetMerlinExportStringRequest::setExportAge()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @param bool $exportBirthday
     * @param bool $exportAge
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?array $midocoSelectedCrmPersonTraveller = null, ?bool $exportBirthday = null, ?bool $exportAge = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller)
            ->setExportBirthday($exportBirthday)
            ->setExportAge($exportAge);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMerlinExportStringRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSelectedCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    public function getMidocoSelectedCrmPersonTraveller(): ?array
    {
        return $this->MidocoSelectedCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSelectedCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSelectedCrmPersonTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSelectedCrmPersonTravellerForArrayConstraintsFromSetMidocoSelectedCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller) {
                $invalidValues[] = is_object($getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem) ? get_class($getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem), var_export($getMerlinExportStringRequestMidocoSelectedCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMerlinExportStringRequest
     */
    public function setMidocoSelectedCrmPersonTraveller(?array $midocoSelectedCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSelectedCrmPersonTravellerArrayErrorMessage = self::validateMidocoSelectedCrmPersonTravellerForArrayConstraintsFromSetMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoSelectedCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller = $midocoSelectedCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMerlinExportStringRequest
     */
    public function addToMidocoSelectedCrmPersonTraveller(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get exportBirthday value
     * @return bool|null
     */
    public function getExportBirthday(): ?bool
    {
        return $this->exportBirthday;
    }
    /**
     * Set exportBirthday value
     * @param bool $exportBirthday
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMerlinExportStringRequest
     */
    public function setExportBirthday(?bool $exportBirthday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportBirthday) && !is_bool($exportBirthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportBirthday, true), gettype($exportBirthday)), __LINE__);
        }
        $this->exportBirthday = $exportBirthday;
        
        return $this;
    }
    /**
     * Get exportAge value
     * @return bool|null
     */
    public function getExportAge(): ?bool
    {
        return $this->exportAge;
    }
    /**
     * Set exportAge value
     * @param bool $exportAge
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMerlinExportStringRequest
     */
    public function setExportAge(?bool $exportAge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAge) && !is_bool($exportAge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAge, true), gettype($exportAge)), __LINE__);
        }
        $this->exportAge = $exportAge;
        
        return $this;
    }
}
