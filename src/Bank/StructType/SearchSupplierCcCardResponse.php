<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierCcCardResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierCcCardResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard[]
     */
    protected ?array $MidocoSupplierCcCard = null;
    /**
     * Constructor method for SearchSupplierCcCardResponse
     * @uses SearchSupplierCcCardResponse::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard[] $midocoSupplierCcCard
     */
    public function __construct(?array $midocoSupplierCcCard = null)
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard[]
     */
    public function getMidocoSupplierCcCard(): ?array
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCcCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCcCardForArrayConstraintFromSetMidocoSupplierCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierCcCardResponseMidocoSupplierCcCardItem) {
            // validation for constraint: itemType
            if (!$searchSupplierCcCardResponseMidocoSupplierCcCardItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard) {
                $invalidValues[] = is_object($searchSupplierCcCardResponseMidocoSupplierCcCardItem) ? get_class($searchSupplierCcCardResponseMidocoSupplierCcCardItem) : sprintf('%s(%s)', gettype($searchSupplierCcCardResponseMidocoSupplierCcCardItem), var_export($searchSupplierCcCardResponseMidocoSupplierCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCcCard property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard[] $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\Bank\StructType\SearchSupplierCcCardResponse
     */
    public function setMidocoSupplierCcCard(?array $midocoSupplierCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCcCardArrayErrorMessage = self::validateMidocoSupplierCcCardForArrayConstraintFromSetMidocoSupplierCcCard($midocoSupplierCcCard))) {
            throw new InvalidArgumentException($midocoSupplierCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchSupplierCcCardResponse
     */
    public function addToMidocoSupplierCcCard(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCcCard property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCcCard[] = $item;
        
        return $this;
    }
}
