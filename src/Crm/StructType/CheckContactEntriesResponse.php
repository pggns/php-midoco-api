<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckContactEntriesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: checkContactEntries --- returns the list of customerIds where ContactEntries have to be updated
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckContactEntriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO[]
     */
    protected ?array $MidocoCustomerId = null;
    /**
     * Constructor method for CheckContactEntriesResponse
     * @uses CheckContactEntriesResponse::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO[] $midocoCustomerId
     */
    public function __construct(?array $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO[]
     */
    public function getMidocoCustomerId(): ?array
    {
        return $this->MidocoCustomerId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkContactEntriesResponseMidocoCustomerIdItem) {
            // validation for constraint: itemType
            if (!$checkContactEntriesResponseMidocoCustomerIdItem instanceof \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO) {
                $invalidValues[] = is_object($checkContactEntriesResponseMidocoCustomerIdItem) ? get_class($checkContactEntriesResponseMidocoCustomerIdItem) : sprintf('%s(%s)', gettype($checkContactEntriesResponseMidocoCustomerIdItem), var_export($checkContactEntriesResponseMidocoCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO[] $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\CheckContactEntriesResponse
     */
    public function setMidocoCustomerId(?array $midocoCustomerId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIdArrayErrorMessage = self::validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\CheckContactEntriesResponse
     */
    public function addToMidocoCustomerId(\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerId[] = $item;
        
        return $this;
    }
}
