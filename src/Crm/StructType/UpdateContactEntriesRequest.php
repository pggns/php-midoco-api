<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateContactEntriesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: update ContactEntries for customers - get the ContactEntries and save them
 * @subpackage Structs
 */
class UpdateContactEntriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO[]
     */
    protected ?array $MidocoCustomerId = null;
    /**
     * Constructor method for UpdateContactEntriesRequest
     * @uses UpdateContactEntriesRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO[] $midocoCustomerId
     */
    public function __construct(?array $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO[]
     */
    public function getMidocoCustomerId(): ?array
    {
        return $this->MidocoCustomerId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIdForArrayConstraintsFromSetMidocoCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateContactEntriesRequestMidocoCustomerIdItem) {
            // validation for constraint: itemType
            if (!$updateContactEntriesRequestMidocoCustomerIdItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO) {
                $invalidValues[] = is_object($updateContactEntriesRequestMidocoCustomerIdItem) ? get_class($updateContactEntriesRequestMidocoCustomerIdItem) : sprintf('%s(%s)', gettype($updateContactEntriesRequestMidocoCustomerIdItem), var_export($updateContactEntriesRequestMidocoCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO[] $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesRequest
     */
    public function setMidocoCustomerId(?array $midocoCustomerId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIdArrayErrorMessage = self::validateMidocoCustomerIdForArrayConstraintsFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesRequest
     */
    public function addToMidocoCustomerId(\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerId[] = $item;
        
        return $this;
    }
}