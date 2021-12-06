<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTooltipTravelersForItemIdResponse StructType
 * @subpackage Structs
 */
class GetTooltipTravelersForItemIdResponse extends AbstractStructBase
{
    /**
     * The MidocoTooltipTravelersForItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTooltipTravelersForItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem[]
     */
    protected ?array $MidocoTooltipTravelersForItem = null;
    /**
     * Constructor method for GetTooltipTravelersForItemIdResponse
     * @uses GetTooltipTravelersForItemIdResponse::setMidocoTooltipTravelersForItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem[] $midocoTooltipTravelersForItem
     */
    public function __construct(?array $midocoTooltipTravelersForItem = null)
    {
        $this
            ->setMidocoTooltipTravelersForItem($midocoTooltipTravelersForItem);
    }
    /**
     * Get MidocoTooltipTravelersForItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem[]
     */
    public function getMidocoTooltipTravelersForItem(): ?array
    {
        return $this->MidocoTooltipTravelersForItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTooltipTravelersForItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTooltipTravelersForItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTooltipTravelersForItemForArrayConstraintsFromSetMidocoTooltipTravelersForItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem) {
            // validation for constraint: itemType
            if (!$getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem) {
                $invalidValues[] = is_object($getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem) ? get_class($getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem) : sprintf('%s(%s)', gettype($getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem), var_export($getTooltipTravelersForItemIdResponseMidocoTooltipTravelersForItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTooltipTravelersForItem property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTooltipTravelersForItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem[] $midocoTooltipTravelersForItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTooltipTravelersForItemIdResponse
     */
    public function setMidocoTooltipTravelersForItem(?array $midocoTooltipTravelersForItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTooltipTravelersForItemArrayErrorMessage = self::validateMidocoTooltipTravelersForItemForArrayConstraintsFromSetMidocoTooltipTravelersForItem($midocoTooltipTravelersForItem))) {
            throw new InvalidArgumentException($midocoTooltipTravelersForItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoTooltipTravelersForItem = $midocoTooltipTravelersForItem;
        
        return $this;
    }
    /**
     * Add item to MidocoTooltipTravelersForItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTooltipTravelersForItemIdResponse
     */
    public function addToMidocoTooltipTravelersForItem(\Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem) {
            throw new InvalidArgumentException(sprintf('The MidocoTooltipTravelersForItem property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTooltipTravelersForItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTooltipTravelersForItem[] = $item;
        
        return $this;
    }
}
