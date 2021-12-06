<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedPrintSelectsResponse StructType
 * @subpackage Structs
 */
class GetAssignedPrintSelectsResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintDescription
     * @var \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO[]
     */
    protected ?array $MidocoPrintDescription = null;
    /**
     * Constructor method for GetAssignedPrintSelectsResponse
     * @uses GetAssignedPrintSelectsResponse::setMidocoPrintDescription()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     */
    public function __construct(?array $midocoPrintDescription = null)
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription);
    }
    /**
     * Get MidocoPrintDescription value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO[]
     */
    public function getMidocoPrintDescription(): ?array
    {
        return $this->MidocoPrintDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedPrintSelectsResponseMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAssignedPrintSelectsResponseMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($getAssignedPrintSelectsResponseMidocoPrintDescriptionItem) ? get_class($getAssignedPrintSelectsResponseMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($getAssignedPrintSelectsResponseMidocoPrintDescriptionItem), var_export($getAssignedPrintSelectsResponseMidocoPrintDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetAssignedPrintSelectsResponse
     */
    public function setMidocoPrintDescription(?array $midocoPrintDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintDescriptionArrayErrorMessage = self::validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription($midocoPrintDescription))) {
            throw new InvalidArgumentException($midocoPrintDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintDescription = $midocoPrintDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetAssignedPrintSelectsResponse
     */
    public function addToMidocoPrintDescription(\Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\PrintDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintDescription[] = $item;
        
        return $this;
    }
}
