<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByProductTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListByProductTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsByProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsByProductType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType[]
     */
    protected ?array $MidocoSalesListsByProductType = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsByProductTypeSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $SalesListsByProductTypeSums = null;
    /**
     * Constructor method for SalesListByProductTypeResponse
     * @uses SalesListByProductTypeResponse::setMidocoSalesListsByProductType()
     * @uses SalesListByProductTypeResponse::setNoOfResults()
     * @uses SalesListByProductTypeResponse::setSalesListsByProductTypeSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType[] $midocoSalesListsByProductType
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums
     */
    public function __construct(?array $midocoSalesListsByProductType = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums = null)
    {
        $this
            ->setMidocoSalesListsByProductType($midocoSalesListsByProductType)
            ->setNoOfResults($noOfResults)
            ->setSalesListsByProductTypeSums($salesListsByProductTypeSums);
    }
    /**
     * Get MidocoSalesListsByProductType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType[]
     */
    public function getMidocoSalesListsByProductType(): ?array
    {
        return $this->MidocoSalesListsByProductType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSalesListsByProductType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsByProductType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsByProductTypeForArrayConstraintFromSetMidocoSalesListsByProductType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) {
            // validation for constraint: itemType
            if (!$salesListByProductTypeResponseMidocoSalesListsByProductTypeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType) {
                $invalidValues[] = is_object($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) ? get_class($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) : sprintf('%s(%s)', gettype($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem), var_export($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsByProductType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsByProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType[] $midocoSalesListsByProductType
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function setMidocoSalesListsByProductType(?array $midocoSalesListsByProductType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsByProductTypeArrayErrorMessage = self::validateMidocoSalesListsByProductTypeForArrayConstraintFromSetMidocoSalesListsByProductType($midocoSalesListsByProductType))) {
            throw new InvalidArgumentException($midocoSalesListsByProductTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsByProductType = $midocoSalesListsByProductType;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsByProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function addToMidocoSalesListsByProductType(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsByProductType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsByProductType[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get SalesListsByProductTypeSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType|null
     */
    public function getSalesListsByProductTypeSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
    {
        return $this->SalesListsByProductTypeSums;
    }
    /**
     * Set SalesListsByProductTypeSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function setSalesListsByProductTypeSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums = null): self
    {
        $this->SalesListsByProductTypeSums = $salesListsByProductTypeSums;
        
        return $this;
    }
}
