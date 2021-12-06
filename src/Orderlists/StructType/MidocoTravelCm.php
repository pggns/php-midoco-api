<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelCm StructType
 * @subpackage Structs
 */
class MidocoTravelCm extends TravelCmDTO
{
    /**
     * The MidocoTravelAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelAttr
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr[]
     */
    protected ?array $MidocoTravelAttr = null;
    /**
     * The MidocoTravelExtraData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelExtraData
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO[]
     */
    protected ?array $MidocoTravelExtraData = null;
    /**
     * Constructor method for MidocoTravelCm
     * @uses MidocoTravelCm::setMidocoTravelAttr()
     * @uses MidocoTravelCm::setMidocoTravelExtraData()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr[] $midocoTravelAttr
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO[] $midocoTravelExtraData
     */
    public function __construct(?array $midocoTravelAttr = null, ?array $midocoTravelExtraData = null)
    {
        $this
            ->setMidocoTravelAttr($midocoTravelAttr)
            ->setMidocoTravelExtraData($midocoTravelExtraData);
    }
    /**
     * Get MidocoTravelAttr value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr[]
     */
    public function getMidocoTravelAttr(): ?array
    {
        return $this->MidocoTravelAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelAttrForArrayConstraintsFromSetMidocoTravelAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelCmMidocoTravelAttrItem) {
            // validation for constraint: itemType
            if (!$midocoTravelCmMidocoTravelAttrItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr) {
                $invalidValues[] = is_object($midocoTravelCmMidocoTravelAttrItem) ? get_class($midocoTravelCmMidocoTravelAttrItem) : sprintf('%s(%s)', gettype($midocoTravelCmMidocoTravelAttrItem), var_export($midocoTravelCmMidocoTravelAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelAttr property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr[] $midocoTravelAttr
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelCm
     */
    public function setMidocoTravelAttr(?array $midocoTravelAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelAttrArrayErrorMessage = self::validateMidocoTravelAttrForArrayConstraintsFromSetMidocoTravelAttr($midocoTravelAttr))) {
            throw new InvalidArgumentException($midocoTravelAttrArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelAttr = $midocoTravelAttr;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelCm
     */
    public function addToMidocoTravelAttr(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelAttr property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelAttr[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTravelExtraData value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO[]
     */
    public function getMidocoTravelExtraData(): ?array
    {
        return $this->MidocoTravelExtraData;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelExtraData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelExtraData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelExtraDataForArrayConstraintsFromSetMidocoTravelExtraData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelCmMidocoTravelExtraDataItem) {
            // validation for constraint: itemType
            if (!$midocoTravelCmMidocoTravelExtraDataItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO) {
                $invalidValues[] = is_object($midocoTravelCmMidocoTravelExtraDataItem) ? get_class($midocoTravelCmMidocoTravelExtraDataItem) : sprintf('%s(%s)', gettype($midocoTravelCmMidocoTravelExtraDataItem), var_export($midocoTravelCmMidocoTravelExtraDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelExtraData property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelExtraData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO[] $midocoTravelExtraData
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelCm
     */
    public function setMidocoTravelExtraData(?array $midocoTravelExtraData = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelExtraDataArrayErrorMessage = self::validateMidocoTravelExtraDataForArrayConstraintsFromSetMidocoTravelExtraData($midocoTravelExtraData))) {
            throw new InvalidArgumentException($midocoTravelExtraDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelExtraData = $midocoTravelExtraData;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelExtraData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelCm
     */
    public function addToMidocoTravelExtraData(\Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelExtraData property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\TravelExtraDataDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelExtraData[] = $item;
        
        return $this;
    }
}
