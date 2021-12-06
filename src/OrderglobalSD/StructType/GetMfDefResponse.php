<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfDefResponse StructType
 * @subpackage Structs
 */
class GetMfDefResponse extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef[]
     */
    protected ?array $MidocoMfDef = null;
    /**
     * Constructor method for GetMfDefResponse
     * @uses GetMfDefResponse::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef[] $midocoMfDef
     */
    public function __construct(?array $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef[]
     */
    public function getMidocoMfDef(): ?array
    {
        return $this->MidocoMfDef;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMfDef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMfDef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfDefForArrayConstraintsFromSetMidocoMfDef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfDefResponseMidocoMfDefItem) {
            // validation for constraint: itemType
            if (!$getMfDefResponseMidocoMfDefItem instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef) {
                $invalidValues[] = is_object($getMfDefResponseMidocoMfDefItem) ? get_class($getMfDefResponseMidocoMfDefItem) : sprintf('%s(%s)', gettype($getMfDefResponseMidocoMfDefItem), var_export($getMfDefResponseMidocoMfDefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMfDef property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMfDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef[] $midocoMfDef
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMfDefResponse
     */
    public function setMidocoMfDef(?array $midocoMfDef = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfDefArrayErrorMessage = self::validateMidocoMfDefForArrayConstraintsFromSetMidocoMfDef($midocoMfDef))) {
            throw new InvalidArgumentException($midocoMfDefArrayErrorMessage, __LINE__);
        }
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
    /**
     * Add item to MidocoMfDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef $item
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMfDefResponse
     */
    public function addToMidocoMfDef(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef) {
            throw new InvalidArgumentException(sprintf('The MidocoMfDef property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoMfDef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMfDef[] = $item;
        
        return $this;
    }
}
