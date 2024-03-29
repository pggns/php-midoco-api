<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintDescriptionListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintDescriptionListResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintDescription
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    protected ?array $MidocoPrintDescription = null;
    /**
     * Constructor method for GetPrintDescriptionListResponse
     * @uses GetPrintDescriptionListResponse::setMidocoPrintDescription()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     */
    public function __construct(?array $midocoPrintDescription = null)
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription);
    }
    /**
     * Get MidocoPrintDescription value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    public function getMidocoPrintDescription(): ?array
    {
        return $this->MidocoPrintDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintDescriptionForArrayConstraintFromSetMidocoPrintDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintDescriptionListResponseMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$getPrintDescriptionListResponseMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($getPrintDescriptionListResponseMidocoPrintDescriptionItem) ? get_class($getPrintDescriptionListResponseMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($getPrintDescriptionListResponseMidocoPrintDescriptionItem), var_export($getPrintDescriptionListResponseMidocoPrintDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintDescriptionListResponse
     */
    public function setMidocoPrintDescription(?array $midocoPrintDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintDescriptionArrayErrorMessage = self::validateMidocoPrintDescriptionForArrayConstraintFromSetMidocoPrintDescription($midocoPrintDescription))) {
            throw new InvalidArgumentException($midocoPrintDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintDescription = $midocoPrintDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintDescriptionListResponse
     */
    public function addToMidocoPrintDescription(\Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintDescription[] = $item;
        
        return $this;
    }
}
