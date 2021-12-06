<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierFreeStornoDayssResponse StructType
 * @subpackage Structs
 */
class GetSupplierFreeStornoDayssResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierFreeStornoDays
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO[]
     */
    protected ?array $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for GetSupplierFreeStornoDayssResponse
     * @uses GetSupplierFreeStornoDayssResponse::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO[] $midocoSupplierFreeStornoDays
     */
    public function __construct(?array $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO[]
     */
    public function getMidocoSupplierFreeStornoDays(): ?array
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierFreeStornoDays method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierFreeStornoDays method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierFreeStornoDaysForArrayConstraintsFromSetMidocoSupplierFreeStornoDays(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem) {
            // validation for constraint: itemType
            if (!$getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO) {
                $invalidValues[] = is_object($getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem) ? get_class($getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem) : sprintf('%s(%s)', gettype($getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem), var_export($getSupplierFreeStornoDayssResponseMidocoSupplierFreeStornoDaysItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierFreeStornoDays property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO[] $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierFreeStornoDayssResponse
     */
    public function setMidocoSupplierFreeStornoDays(?array $midocoSupplierFreeStornoDays = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierFreeStornoDaysArrayErrorMessage = self::validateMidocoSupplierFreeStornoDaysForArrayConstraintsFromSetMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays))) {
            throw new InvalidArgumentException($midocoSupplierFreeStornoDaysArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierFreeStornoDays value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierFreeStornoDayssResponse
     */
    public function addToMidocoSupplierFreeStornoDays(\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierFreeStornoDays property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierFreeStornoDayDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierFreeStornoDays[] = $item;
        
        return $this;
    }
}
