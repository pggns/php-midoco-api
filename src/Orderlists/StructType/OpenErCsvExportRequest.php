<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenErCsvExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpenErCsvExportRequest extends AbstractStructBase
{
    /**
     * The midocoOpenErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[]
     */
    protected ?array $midocoOpenErOutputList = null;
    /**
     * The midocoOpenErListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[]
     */
    protected ?array $midocoOpenErListSums = null;
    /**
     * Constructor method for OpenErCsvExportRequest
     * @uses OpenErCsvExportRequest::setMidocoOpenErOutputList()
     * @uses OpenErCsvExportRequest::setMidocoOpenErListSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[] $midocoOpenErOutputList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[] $midocoOpenErListSums
     */
    public function __construct(?array $midocoOpenErOutputList = null, ?array $midocoOpenErListSums = null)
    {
        $this
            ->setMidocoOpenErOutputList($midocoOpenErOutputList)
            ->setMidocoOpenErListSums($midocoOpenErListSums);
    }
    /**
     * Get midocoOpenErOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[]
     */
    public function getMidocoOpenErOutputList(): ?array
    {
        return $this->midocoOpenErOutputList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOpenErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOpenErOutputList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOpenErOutputListForArrayConstraintFromSetMidocoOpenErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openErCsvExportRequestMidocoOpenErOutputListItem) {
            // validation for constraint: itemType
            if (!$openErCsvExportRequestMidocoOpenErOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType) {
                $invalidValues[] = is_object($openErCsvExportRequestMidocoOpenErOutputListItem) ? get_class($openErCsvExportRequestMidocoOpenErOutputListItem) : sprintf('%s(%s)', gettype($openErCsvExportRequestMidocoOpenErOutputListItem), var_export($openErCsvExportRequestMidocoOpenErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoOpenErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoOpenErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[] $midocoOpenErOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest
     */
    public function setMidocoOpenErOutputList(?array $midocoOpenErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOpenErOutputListArrayErrorMessage = self::validateMidocoOpenErOutputListForArrayConstraintFromSetMidocoOpenErOutputList($midocoOpenErOutputList))) {
            throw new InvalidArgumentException($midocoOpenErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoOpenErOutputList = $midocoOpenErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoOpenErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest
     */
    public function addToMidocoOpenErOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoOpenErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoOpenErOutputList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoOpenErListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[]
     */
    public function getMidocoOpenErListSums(): ?array
    {
        return $this->midocoOpenErListSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOpenErListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOpenErListSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOpenErListSumsForArrayConstraintFromSetMidocoOpenErListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openErCsvExportRequestMidocoOpenErListSumsItem) {
            // validation for constraint: itemType
            if (!$openErCsvExportRequestMidocoOpenErListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType) {
                $invalidValues[] = is_object($openErCsvExportRequestMidocoOpenErListSumsItem) ? get_class($openErCsvExportRequestMidocoOpenErListSumsItem) : sprintf('%s(%s)', gettype($openErCsvExportRequestMidocoOpenErListSumsItem), var_export($openErCsvExportRequestMidocoOpenErListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoOpenErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoOpenErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[] $midocoOpenErListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest
     */
    public function setMidocoOpenErListSums(?array $midocoOpenErListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOpenErListSumsArrayErrorMessage = self::validateMidocoOpenErListSumsForArrayConstraintFromSetMidocoOpenErListSums($midocoOpenErListSums))) {
            throw new InvalidArgumentException($midocoOpenErListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoOpenErListSums = $midocoOpenErListSums;
        
        return $this;
    }
    /**
     * Add item to midocoOpenErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest
     */
    public function addToMidocoOpenErListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoOpenErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoOpenErListSums[] = $item;
        
        return $this;
    }
}
