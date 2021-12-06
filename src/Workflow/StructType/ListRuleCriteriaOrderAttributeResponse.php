<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleCriteriaOrderAttributeResponse StructType
 * @subpackage Structs
 */
class ListRuleCriteriaOrderAttributeResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleCriteriaOrderAttribute
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO[]
     */
    protected ?array $MidocoRuleCriteriaOrderAttribute = null;
    /**
     * Constructor method for ListRuleCriteriaOrderAttributeResponse
     * @uses ListRuleCriteriaOrderAttributeResponse::setMidocoRuleCriteriaOrderAttribute()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO[] $midocoRuleCriteriaOrderAttribute
     */
    public function __construct(?array $midocoRuleCriteriaOrderAttribute = null)
    {
        $this
            ->setMidocoRuleCriteriaOrderAttribute($midocoRuleCriteriaOrderAttribute);
    }
    /**
     * Get MidocoRuleCriteriaOrderAttribute value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO[]
     */
    public function getMidocoRuleCriteriaOrderAttribute(): ?array
    {
        return $this->MidocoRuleCriteriaOrderAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRuleCriteriaOrderAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleCriteriaOrderAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleCriteriaOrderAttributeForArrayConstraintsFromSetMidocoRuleCriteriaOrderAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem) {
            // validation for constraint: itemType
            if (!$listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO) {
                $invalidValues[] = is_object($listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem) ? get_class($listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem) : sprintf('%s(%s)', gettype($listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem), var_export($listRuleCriteriaOrderAttributeResponseMidocoRuleCriteriaOrderAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleCriteriaOrderAttribute property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleCriteriaOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO[] $midocoRuleCriteriaOrderAttribute
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaOrderAttributeResponse
     */
    public function setMidocoRuleCriteriaOrderAttribute(?array $midocoRuleCriteriaOrderAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleCriteriaOrderAttributeArrayErrorMessage = self::validateMidocoRuleCriteriaOrderAttributeForArrayConstraintsFromSetMidocoRuleCriteriaOrderAttribute($midocoRuleCriteriaOrderAttribute))) {
            throw new InvalidArgumentException($midocoRuleCriteriaOrderAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleCriteriaOrderAttribute = $midocoRuleCriteriaOrderAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleCriteriaOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaOrderAttributeResponse
     */
    public function addToMidocoRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleCriteriaOrderAttribute property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleCriteriaOrderAttribute[] = $item;
        
        return $this;
    }
}
