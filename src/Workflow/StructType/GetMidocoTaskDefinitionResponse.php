<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskDefinitionResponse StructType
 * @subpackage Structs
 */
class GetMidocoTaskDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskDefinition
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition[]
     */
    protected ?array $MidocoTaskDefinition = null;
    /**
     * Constructor method for GetMidocoTaskDefinitionResponse
     * @uses GetMidocoTaskDefinitionResponse::setMidocoTaskDefinition()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition[] $midocoTaskDefinition
     */
    public function __construct(?array $midocoTaskDefinition = null)
    {
        $this
            ->setMidocoTaskDefinition($midocoTaskDefinition);
    }
    /**
     * Get MidocoTaskDefinition value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition[]
     */
    public function getMidocoTaskDefinition(): ?array
    {
        return $this->MidocoTaskDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskDefinitionForArrayConstraintsFromSetMidocoTaskDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) {
            // validation for constraint: itemType
            if (!$getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition) {
                $invalidValues[] = is_object($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) ? get_class($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) : sprintf('%s(%s)', gettype($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem), var_export($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskDefinition property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition[] $midocoTaskDefinition
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoTaskDefinitionResponse
     */
    public function setMidocoTaskDefinition(?array $midocoTaskDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskDefinitionArrayErrorMessage = self::validateMidocoTaskDefinitionForArrayConstraintsFromSetMidocoTaskDefinition($midocoTaskDefinition))) {
            throw new InvalidArgumentException($midocoTaskDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskDefinition = $midocoTaskDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoTaskDefinitionResponse
     */
    public function addToMidocoTaskDefinition(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskDefinition property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskDefinition[] = $item;
        
        return $this;
    }
}
