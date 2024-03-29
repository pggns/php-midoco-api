<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConnectionTypeListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetConnectionTypeListResponse extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO[]
     */
    protected ?array $MidocoConnectionType = null;
    /**
     * Constructor method for GetConnectionTypeListResponse
     * @uses GetConnectionTypeListResponse::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO[] $midocoConnectionType
     */
    public function __construct(?array $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO[]
     */
    public function getMidocoConnectionType(): ?array
    {
        return $this->MidocoConnectionType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoConnectionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConnectionType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConnectionTypeForArrayConstraintFromSetMidocoConnectionType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConnectionTypeListResponseMidocoConnectionTypeItem) {
            // validation for constraint: itemType
            if (!$getConnectionTypeListResponseMidocoConnectionTypeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO) {
                $invalidValues[] = is_object($getConnectionTypeListResponseMidocoConnectionTypeItem) ? get_class($getConnectionTypeListResponseMidocoConnectionTypeItem) : sprintf('%s(%s)', gettype($getConnectionTypeListResponseMidocoConnectionTypeItem), var_export($getConnectionTypeListResponseMidocoConnectionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConnectionType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConnectionType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO[] $midocoConnectionType
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetConnectionTypeListResponse
     */
    public function setMidocoConnectionType(?array $midocoConnectionType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConnectionTypeArrayErrorMessage = self::validateMidocoConnectionTypeForArrayConstraintFromSetMidocoConnectionType($midocoConnectionType))) {
            throw new InvalidArgumentException($midocoConnectionTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
    /**
     * Add item to MidocoConnectionType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetConnectionTypeListResponse
     */
    public function addToMidocoConnectionType(\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoConnectionType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConnectionType[] = $item;
        
        return $this;
    }
}
