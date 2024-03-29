<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BirthdayListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BirthdayListResponse extends AbstractStructBase
{
    /**
     * The MidocoBirthdayList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBirthdayList
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType[]
     */
    protected ?array $MidocoBirthdayList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The MidocoBirthdayListSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $MidocoBirthdayListSums = null;
    /**
     * Constructor method for BirthdayListResponse
     * @uses BirthdayListResponse::setMidocoBirthdayList()
     * @uses BirthdayListResponse::setNoOfResults()
     * @uses BirthdayListResponse::setMidocoBirthdayListSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType[] $midocoBirthdayList
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $midocoBirthdayListSums
     */
    public function __construct(?array $midocoBirthdayList = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $midocoBirthdayListSums = null)
    {
        $this
            ->setMidocoBirthdayList($midocoBirthdayList)
            ->setNoOfResults($noOfResults)
            ->setMidocoBirthdayListSums($midocoBirthdayListSums);
    }
    /**
     * Get MidocoBirthdayList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType[]
     */
    public function getMidocoBirthdayList(): ?array
    {
        return $this->MidocoBirthdayList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBirthdayList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBirthdayList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBirthdayListForArrayConstraintFromSetMidocoBirthdayList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $birthdayListResponseMidocoBirthdayListItem) {
            // validation for constraint: itemType
            if (!$birthdayListResponseMidocoBirthdayListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType) {
                $invalidValues[] = is_object($birthdayListResponseMidocoBirthdayListItem) ? get_class($birthdayListResponseMidocoBirthdayListItem) : sprintf('%s(%s)', gettype($birthdayListResponseMidocoBirthdayListItem), var_export($birthdayListResponseMidocoBirthdayListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBirthdayList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBirthdayList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType[] $midocoBirthdayList
     * @return \Pggns\MidocoApi\Orderlists\StructType\BirthdayListResponse
     */
    public function setMidocoBirthdayList(?array $midocoBirthdayList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBirthdayListArrayErrorMessage = self::validateMidocoBirthdayListForArrayConstraintFromSetMidocoBirthdayList($midocoBirthdayList))) {
            throw new InvalidArgumentException($midocoBirthdayListArrayErrorMessage, __LINE__);
        }
        $this->MidocoBirthdayList = $midocoBirthdayList;
        
        return $this;
    }
    /**
     * Add item to MidocoBirthdayList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BirthdayListResponse
     */
    public function addToMidocoBirthdayList(\Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType) {
            throw new InvalidArgumentException(sprintf('The MidocoBirthdayList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBirthdayList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BirthdayListResponse
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
     * Get MidocoBirthdayListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType|null
     */
    public function getMidocoBirthdayListSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
    {
        return $this->MidocoBirthdayListSums;
    }
    /**
     * Set MidocoBirthdayListSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $midocoBirthdayListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\BirthdayListResponse
     */
    public function setMidocoBirthdayListSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType $midocoBirthdayListSums = null): self
    {
        $this->MidocoBirthdayListSums = $midocoBirthdayListSums;
        
        return $this;
    }
}
