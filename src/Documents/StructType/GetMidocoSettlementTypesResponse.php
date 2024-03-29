<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSettlementTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSettlementTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementType
     * @var \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO[]
     */
    protected ?array $MidocoSettlementType = null;
    /**
     * Constructor method for GetMidocoSettlementTypesResponse
     * @uses GetMidocoSettlementTypesResponse::setMidocoSettlementType()
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO[] $midocoSettlementType
     */
    public function __construct(?array $midocoSettlementType = null)
    {
        $this
            ->setMidocoSettlementType($midocoSettlementType);
    }
    /**
     * Get MidocoSettlementType value
     * @return \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO[]
     */
    public function getMidocoSettlementType(): ?array
    {
        return $this->MidocoSettlementType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSettlementType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementTypeForArrayConstraintFromSetMidocoSettlementType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSettlementTypesResponseMidocoSettlementTypeItem) {
            // validation for constraint: itemType
            if (!$getMidocoSettlementTypesResponseMidocoSettlementTypeItem instanceof \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO) {
                $invalidValues[] = is_object($getMidocoSettlementTypesResponseMidocoSettlementTypeItem) ? get_class($getMidocoSettlementTypesResponseMidocoSettlementTypeItem) : sprintf('%s(%s)', gettype($getMidocoSettlementTypesResponseMidocoSettlementTypeItem), var_export($getMidocoSettlementTypesResponseMidocoSettlementTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO[] $midocoSettlementType
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoSettlementTypesResponse
     */
    public function setMidocoSettlementType(?array $midocoSettlementType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementTypeArrayErrorMessage = self::validateMidocoSettlementTypeForArrayConstraintFromSetMidocoSettlementType($midocoSettlementType))) {
            throw new InvalidArgumentException($midocoSettlementTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementType = $midocoSettlementType;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoSettlementTypesResponse
     */
    public function addToMidocoSettlementType(\Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementType[] = $item;
        
        return $this;
    }
}
