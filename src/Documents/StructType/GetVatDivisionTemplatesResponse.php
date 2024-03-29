<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionTemplatesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDivisionTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType[]
     */
    protected ?array $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for GetVatDivisionTemplatesResponse
     * @uses GetVatDivisionTemplatesResponse::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType[] $midocoVatDivisionTemplate
     */
    public function __construct(?array $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType[]
     */
    public function getMidocoVatDivisionTemplate(): ?array
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatDivisionTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivisionTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionTemplateForArrayConstraintFromSetMidocoVatDivisionTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) {
            // validation for constraint: itemType
            if (!$getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem instanceof \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType) {
                $invalidValues[] = is_object($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) ? get_class($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) : sprintf('%s(%s)', gettype($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem), var_export($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType[] $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Documents\StructType\GetVatDivisionTemplatesResponse
     */
    public function setMidocoVatDivisionTemplate(?array $midocoVatDivisionTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionTemplateArrayErrorMessage = self::validateMidocoVatDivisionTemplateForArrayConstraintFromSetMidocoVatDivisionTemplate($midocoVatDivisionTemplate))) {
            throw new InvalidArgumentException($midocoVatDivisionTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetVatDivisionTemplatesResponse
     */
    public function addToMidocoVatDivisionTemplate(\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivisionTemplate[] = $item;
        
        return $this;
    }
}
