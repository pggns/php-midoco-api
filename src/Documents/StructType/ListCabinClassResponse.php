<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCabinClassResponse StructType
 * @subpackage Structs
 */
class ListCabinClassResponse extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass[]
     */
    protected ?array $MidocoCabinClass = null;
    /**
     * Constructor method for ListCabinClassResponse
     * @uses ListCabinClassResponse::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass[] $midocoCabinClass
     */
    public function __construct(?array $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass[]
     */
    public function getMidocoCabinClass(): ?array
    {
        return $this->MidocoCabinClass;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCabinClass method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCabinClass method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCabinClassForArrayConstraintsFromSetMidocoCabinClass(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listCabinClassResponseMidocoCabinClassItem) {
            // validation for constraint: itemType
            if (!$listCabinClassResponseMidocoCabinClassItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass) {
                $invalidValues[] = is_object($listCabinClassResponseMidocoCabinClassItem) ? get_class($listCabinClassResponseMidocoCabinClassItem) : sprintf('%s(%s)', gettype($listCabinClassResponseMidocoCabinClassItem), var_export($listCabinClassResponseMidocoCabinClassItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCabinClass property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCabinClass value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass[] $midocoCabinClass
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListCabinClassResponse
     */
    public function setMidocoCabinClass(?array $midocoCabinClass = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCabinClassArrayErrorMessage = self::validateMidocoCabinClassForArrayConstraintsFromSetMidocoCabinClass($midocoCabinClass))) {
            throw new InvalidArgumentException($midocoCabinClassArrayErrorMessage, __LINE__);
        }
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
    /**
     * Add item to MidocoCabinClass value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListCabinClassResponse
     */
    public function addToMidocoCabinClass(\Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass) {
            throw new InvalidArgumentException(sprintf('The MidocoCabinClass property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoCabinClass, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCabinClass[] = $item;
        
        return $this;
    }
}
