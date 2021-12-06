<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleCriteriaOrderResponse StructType
 * @subpackage Structs
 */
class ListRuleCriteriaOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleCriteriaOrder
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO[]
     */
    protected ?array $MidocoRuleCriteriaOrder = null;
    /**
     * Constructor method for ListRuleCriteriaOrderResponse
     * @uses ListRuleCriteriaOrderResponse::setMidocoRuleCriteriaOrder()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO[] $midocoRuleCriteriaOrder
     */
    public function __construct(?array $midocoRuleCriteriaOrder = null)
    {
        $this
            ->setMidocoRuleCriteriaOrder($midocoRuleCriteriaOrder);
    }
    /**
     * Get MidocoRuleCriteriaOrder value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO[]
     */
    public function getMidocoRuleCriteriaOrder(): ?array
    {
        return $this->MidocoRuleCriteriaOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRuleCriteriaOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleCriteriaOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleCriteriaOrderForArrayConstraintsFromSetMidocoRuleCriteriaOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem) {
            // validation for constraint: itemType
            if (!$listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO) {
                $invalidValues[] = is_object($listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem) ? get_class($listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem) : sprintf('%s(%s)', gettype($listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem), var_export($listRuleCriteriaOrderResponseMidocoRuleCriteriaOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleCriteriaOrder property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleCriteriaOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO[] $midocoRuleCriteriaOrder
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaOrderResponse
     */
    public function setMidocoRuleCriteriaOrder(?array $midocoRuleCriteriaOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleCriteriaOrderArrayErrorMessage = self::validateMidocoRuleCriteriaOrderForArrayConstraintsFromSetMidocoRuleCriteriaOrder($midocoRuleCriteriaOrder))) {
            throw new InvalidArgumentException($midocoRuleCriteriaOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleCriteriaOrder = $midocoRuleCriteriaOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleCriteriaOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaOrderResponse
     */
    public function addToMidocoRuleCriteriaOrder(\Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleCriteriaOrder property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaOrderDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleCriteriaOrder[] = $item;
        
        return $this;
    }
}
