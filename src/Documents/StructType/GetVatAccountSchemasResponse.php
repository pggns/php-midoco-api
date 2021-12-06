<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatAccountSchemasResponse StructType
 * @subpackage Structs
 */
class GetVatAccountSchemasResponse extends AbstractStructBase
{
    /**
     * The MidocoVatAccountSchema
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatAccountSchema
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema[]
     */
    protected ?array $MidocoVatAccountSchema = null;
    /**
     * Constructor method for GetVatAccountSchemasResponse
     * @uses GetVatAccountSchemasResponse::setMidocoVatAccountSchema()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema[] $midocoVatAccountSchema
     */
    public function __construct(?array $midocoVatAccountSchema = null)
    {
        $this
            ->setMidocoVatAccountSchema($midocoVatAccountSchema);
    }
    /**
     * Get MidocoVatAccountSchema value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema[]
     */
    public function getMidocoVatAccountSchema(): ?array
    {
        return $this->MidocoVatAccountSchema;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatAccountSchema method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatAccountSchema method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatAccountSchemaForArrayConstraintsFromSetMidocoVatAccountSchema(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatAccountSchemasResponseMidocoVatAccountSchemaItem) {
            // validation for constraint: itemType
            if (!$getVatAccountSchemasResponseMidocoVatAccountSchemaItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema) {
                $invalidValues[] = is_object($getVatAccountSchemasResponseMidocoVatAccountSchemaItem) ? get_class($getVatAccountSchemasResponseMidocoVatAccountSchemaItem) : sprintf('%s(%s)', gettype($getVatAccountSchemasResponseMidocoVatAccountSchemaItem), var_export($getVatAccountSchemasResponseMidocoVatAccountSchemaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatAccountSchema property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatAccountSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema[] $midocoVatAccountSchema
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetVatAccountSchemasResponse
     */
    public function setMidocoVatAccountSchema(?array $midocoVatAccountSchema = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatAccountSchemaArrayErrorMessage = self::validateMidocoVatAccountSchemaForArrayConstraintsFromSetMidocoVatAccountSchema($midocoVatAccountSchema))) {
            throw new InvalidArgumentException($midocoVatAccountSchemaArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatAccountSchema = $midocoVatAccountSchema;
        
        return $this;
    }
    /**
     * Add item to MidocoVatAccountSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetVatAccountSchemasResponse
     */
    public function addToMidocoVatAccountSchema(\Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema) {
            throw new InvalidArgumentException(sprintf('The MidocoVatAccountSchema property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatAccountSchema, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatAccountSchema[] = $item;
        
        return $this;
    }
}
