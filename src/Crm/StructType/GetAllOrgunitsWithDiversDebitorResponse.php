<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllOrgunitsWithDiversDebitorResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllOrgunitsWithDiversDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoOrgunit
     * @var \Pggns\MidocoApi\Crm\StructType\OrgunitDTO[]
     */
    protected ?array $MidocoOrgunit = null;
    /**
     * Constructor method for GetAllOrgunitsWithDiversDebitorResponse
     * @uses GetAllOrgunitsWithDiversDebitorResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitDTO[] $midocoOrgunit
     */
    public function __construct(?array $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Crm\StructType\OrgunitDTO[]
     */
    public function getMidocoOrgunit(): ?array
    {
        return $this->MidocoOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitForArrayConstraintFromSetMidocoOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) {
            // validation for constraint: itemType
            if (!$getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem instanceof \Pggns\MidocoApi\Crm\StructType\OrgunitDTO) {
                $invalidValues[] = is_object($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) ? get_class($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) : sprintf('%s(%s)', gettype($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem), var_export($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Crm\StructType\OrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitDTO[] $midocoOrgunit
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllOrgunitsWithDiversDebitorResponse
     */
    public function setMidocoOrgunit(?array $midocoOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitArrayErrorMessage = self::validateMidocoOrgunitForArrayConstraintFromSetMidocoOrgunit($midocoOrgunit))) {
            throw new InvalidArgumentException($midocoOrgunitArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllOrgunitsWithDiversDebitorResponse
     */
    public function addToMidocoOrgunit(\Pggns\MidocoApi\Crm\StructType\OrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\OrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Crm\StructType\OrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunit[] = $item;
        
        return $this;
    }
}
