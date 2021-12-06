<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoiceFileFormat StructType
 * @subpackage Structs
 */
class MidocoInvoiceFileFormat extends InvoiceFileFormatDTO
{
    /**
     * The MidocoInvoiceFileFormatContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormatContent
     * @var \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO[]
     */
    protected ?array $MidocoInvoiceFileFormatContent = null;
    /**
     * Constructor method for MidocoInvoiceFileFormat
     * @uses MidocoInvoiceFileFormat::setMidocoInvoiceFileFormatContent()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO[] $midocoInvoiceFileFormatContent
     */
    public function __construct(?array $midocoInvoiceFileFormatContent = null)
    {
        $this
            ->setMidocoInvoiceFileFormatContent($midocoInvoiceFileFormatContent);
    }
    /**
     * Get MidocoInvoiceFileFormatContent value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO[]
     */
    public function getMidocoInvoiceFileFormatContent(): ?array
    {
        return $this->MidocoInvoiceFileFormatContent;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceFileFormatContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceFileFormatContent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceFileFormatContentForArrayConstraintsFromSetMidocoInvoiceFileFormatContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO) {
                $invalidValues[] = is_object($midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem) ? get_class($midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem) : sprintf('%s(%s)', gettype($midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem), var_export($midocoInvoiceFileFormatMidocoInvoiceFileFormatContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceFileFormatContent property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceFileFormatContent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO[] $midocoInvoiceFileFormatContent
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceFileFormat
     */
    public function setMidocoInvoiceFileFormatContent(?array $midocoInvoiceFileFormatContent = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceFileFormatContentArrayErrorMessage = self::validateMidocoInvoiceFileFormatContentForArrayConstraintsFromSetMidocoInvoiceFileFormatContent($midocoInvoiceFileFormatContent))) {
            throw new InvalidArgumentException($midocoInvoiceFileFormatContentArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceFileFormatContent = $midocoInvoiceFileFormatContent;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceFileFormatContent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceFileFormat
     */
    public function addToMidocoInvoiceFileFormatContent(\Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceFileFormatContent property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\InvoiceFileFormatContentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceFileFormatContent[] = $item;
        
        return $this;
    }
}
