<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelersForDocumentIdResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTravelersForDocumentId --- returns the travelers corresponding to a document id
 * @subpackage Structs
 */
class GetTravelersForDocumentIdResponse extends AbstractStructBase
{
    /**
     * The MidocoSellPassengerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassengerInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo[]
     */
    protected ?array $MidocoSellPassengerInfo = null;
    /**
     * Constructor method for GetTravelersForDocumentIdResponse
     * @uses GetTravelersForDocumentIdResponse::setMidocoSellPassengerInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo[] $midocoSellPassengerInfo
     */
    public function __construct(?array $midocoSellPassengerInfo = null)
    {
        $this
            ->setMidocoSellPassengerInfo($midocoSellPassengerInfo);
    }
    /**
     * Get MidocoSellPassengerInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo[]
     */
    public function getMidocoSellPassengerInfo(): ?array
    {
        return $this->MidocoSellPassengerInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellPassengerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassengerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerInfoForArrayConstraintsFromSetMidocoSellPassengerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem) {
            // validation for constraint: itemType
            if (!$getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo) {
                $invalidValues[] = is_object($getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem) ? get_class($getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem) : sprintf('%s(%s)', gettype($getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem), var_export($getTravelersForDocumentIdResponseMidocoSellPassengerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassengerInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassengerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo[] $midocoSellPassengerInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdResponse
     */
    public function setMidocoSellPassengerInfo(?array $midocoSellPassengerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerInfoArrayErrorMessage = self::validateMidocoSellPassengerInfoForArrayConstraintsFromSetMidocoSellPassengerInfo($midocoSellPassengerInfo))) {
            throw new InvalidArgumentException($midocoSellPassengerInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassengerInfo = $midocoSellPassengerInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassengerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdResponse
     */
    public function addToMidocoSellPassengerInfo(\Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassengerInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSellPassengerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassengerInfo[] = $item;
        
        return $this;
    }
}
