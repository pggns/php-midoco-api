<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedAdaptersAttrResponse StructType
 * @subpackage Structs
 */
class AssignedAdaptersAttrResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapterAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapterAttr
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO[]
     */
    protected ?array $MidocoAdapterAttr = null;
    /**
     * Constructor method for AssignedAdaptersAttrResponse
     * @uses AssignedAdaptersAttrResponse::setMidocoAdapterAttr()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO[] $midocoAdapterAttr
     */
    public function __construct(?array $midocoAdapterAttr = null)
    {
        $this
            ->setMidocoAdapterAttr($midocoAdapterAttr);
    }
    /**
     * Get MidocoAdapterAttr value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO[]
     */
    public function getMidocoAdapterAttr(): ?array
    {
        return $this->MidocoAdapterAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapterAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapterAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterAttrForArrayConstraintsFromSetMidocoAdapterAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignedAdaptersAttrResponseMidocoAdapterAttrItem) {
            // validation for constraint: itemType
            if (!$assignedAdaptersAttrResponseMidocoAdapterAttrItem instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO) {
                $invalidValues[] = is_object($assignedAdaptersAttrResponseMidocoAdapterAttrItem) ? get_class($assignedAdaptersAttrResponseMidocoAdapterAttrItem) : sprintf('%s(%s)', gettype($assignedAdaptersAttrResponseMidocoAdapterAttrItem), var_export($assignedAdaptersAttrResponseMidocoAdapterAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapterAttr property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapterAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO[] $midocoAdapterAttr
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AssignedAdaptersAttrResponse
     */
    public function setMidocoAdapterAttr(?array $midocoAdapterAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterAttrArrayErrorMessage = self::validateMidocoAdapterAttrForArrayConstraintsFromSetMidocoAdapterAttr($midocoAdapterAttr))) {
            throw new InvalidArgumentException($midocoAdapterAttrArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapterAttr = $midocoAdapterAttr;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapterAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO $item
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AssignedAdaptersAttrResponse
     */
    public function addToMidocoAdapterAttr(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapterAttr property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AdapterAttrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapterAttr[] = $item;
        
        return $this;
    }
}
