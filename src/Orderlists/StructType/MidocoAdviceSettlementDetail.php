<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdviceSettlementDetail StructType
 * @subpackage Structs
 */
class MidocoAdviceSettlementDetail extends AdviceSettlemDetailDTO
{
    /**
     * The MidocoAdviceDetailVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceDetailVatDiv
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv[]
     */
    protected ?array $MidocoAdviceDetailVatDiv = null;
    /**
     * Constructor method for MidocoAdviceSettlementDetail
     * @uses MidocoAdviceSettlementDetail::setMidocoAdviceDetailVatDiv()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     */
    public function __construct(?array $midocoAdviceDetailVatDiv = null)
    {
        $this
            ->setMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv);
    }
    /**
     * Get MidocoAdviceDetailVatDiv value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv[]
     */
    public function getMidocoAdviceDetailVatDiv(): ?array
    {
        return $this->MidocoAdviceDetailVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdviceDetailVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceDetailVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceDetailVatDivForArrayConstraintsFromSetMidocoAdviceDetailVatDiv(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) {
            // validation for constraint: itemType
            if (!$midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv) {
                $invalidValues[] = is_object($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) ? get_class($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) : sprintf('%s(%s)', gettype($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem), var_export($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceSettlementDetail
     */
    public function setMidocoAdviceDetailVatDiv(?array $midocoAdviceDetailVatDiv = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceDetailVatDivArrayErrorMessage = self::validateMidocoAdviceDetailVatDivForArrayConstraintsFromSetMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv))) {
            throw new InvalidArgumentException($midocoAdviceDetailVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv = $midocoAdviceDetailVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceSettlementDetail
     */
    public function addToMidocoAdviceDetailVatDiv(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv[] = $item;
        
        return $this;
    }
}
