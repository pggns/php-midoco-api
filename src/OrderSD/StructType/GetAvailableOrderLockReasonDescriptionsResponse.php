<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrderLockReasonDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderLockReasonDescriptions --- returns list of hierarhically available order lock reason descriptions for the given lock reason
 * @subpackage Structs
 */
class GetAvailableOrderLockReasonDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReasonDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLockReasonDescription
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO[]
     */
    protected ?array $MidocoOrderLockReasonDescription = null;
    /**
     * Constructor method for GetAvailableOrderLockReasonDescriptionsResponse
     * @uses GetAvailableOrderLockReasonDescriptionsResponse::setMidocoOrderLockReasonDescription()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO[] $midocoOrderLockReasonDescription
     */
    public function __construct(?array $midocoOrderLockReasonDescription = null)
    {
        $this
            ->setMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription);
    }
    /**
     * Get MidocoOrderLockReasonDescription value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO[]
     */
    public function getMidocoOrderLockReasonDescription(): ?array
    {
        return $this->MidocoOrderLockReasonDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderLockReasonDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLockReasonDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLockReasonDescriptionForArrayConstraintsFromSetMidocoOrderLockReasonDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) ? get_class($getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem), var_export($getAvailableOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLockReasonDescription property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLockReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO[] $midocoOrderLockReasonDescription
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse
     */
    public function setMidocoOrderLockReasonDescription(?array $midocoOrderLockReasonDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLockReasonDescriptionArrayErrorMessage = self::validateMidocoOrderLockReasonDescriptionForArrayConstraintsFromSetMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription))) {
            throw new InvalidArgumentException($midocoOrderLockReasonDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLockReasonDescription = $midocoOrderLockReasonDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLockReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse
     */
    public function addToMidocoOrderLockReasonDescription(\Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLockReasonDescription property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLockReasonDescription[] = $item;
        
        return $this;
    }
}
