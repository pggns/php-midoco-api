<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusAdditionResponse StructType
 * @subpackage Structs
 */
class GetMidocoBonusAdditionResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusAddition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBonusAddition
     * @var \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO[]
     */
    protected ?array $MidocoBonusAddition = null;
    /**
     * Constructor method for GetMidocoBonusAdditionResponse
     * @uses GetMidocoBonusAdditionResponse::setMidocoBonusAddition()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO[] $midocoBonusAddition
     */
    public function __construct(?array $midocoBonusAddition = null)
    {
        $this
            ->setMidocoBonusAddition($midocoBonusAddition);
    }
    /**
     * Get MidocoBonusAddition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO[]
     */
    public function getMidocoBonusAddition(): ?array
    {
        return $this->MidocoBonusAddition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBonusAddition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusAddition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusAdditionForArrayConstraintsFromSetMidocoBonusAddition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoBonusAdditionResponseMidocoBonusAdditionItem) {
            // validation for constraint: itemType
            if (!$getMidocoBonusAdditionResponseMidocoBonusAdditionItem instanceof \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO) {
                $invalidValues[] = is_object($getMidocoBonusAdditionResponseMidocoBonusAdditionItem) ? get_class($getMidocoBonusAdditionResponseMidocoBonusAdditionItem) : sprintf('%s(%s)', gettype($getMidocoBonusAdditionResponseMidocoBonusAdditionItem), var_export($getMidocoBonusAdditionResponseMidocoBonusAdditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusAddition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusAddition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO[] $midocoBonusAddition
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionResponse
     */
    public function setMidocoBonusAddition(?array $midocoBonusAddition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusAdditionArrayErrorMessage = self::validateMidocoBonusAdditionForArrayConstraintsFromSetMidocoBonusAddition($midocoBonusAddition))) {
            throw new InvalidArgumentException($midocoBonusAdditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusAddition = $midocoBonusAddition;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusAddition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionResponse
     */
    public function addToMidocoBonusAddition(\Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusAddition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusAddition[] = $item;
        
        return $this;
    }
}
