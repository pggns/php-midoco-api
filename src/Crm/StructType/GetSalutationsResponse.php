<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSalutationsResponse extends AbstractStructBase
{
    /**
     * The MidocoSalutation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalutation
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoSalutation[]
     */
    protected ?array $MidocoSalutation = null;
    /**
     * Constructor method for GetSalutationsResponse
     * @uses GetSalutationsResponse::setMidocoSalutation()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSalutation[] $midocoSalutation
     */
    public function __construct(?array $midocoSalutation = null)
    {
        $this
            ->setMidocoSalutation($midocoSalutation);
    }
    /**
     * Get MidocoSalutation value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSalutation[]
     */
    public function getMidocoSalutation(): ?array
    {
        return $this->MidocoSalutation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSalutation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalutation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalutationForArrayConstraintFromSetMidocoSalutation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSalutationsResponseMidocoSalutationItem) {
            // validation for constraint: itemType
            if (!$getSalutationsResponseMidocoSalutationItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSalutation) {
                $invalidValues[] = is_object($getSalutationsResponseMidocoSalutationItem) ? get_class($getSalutationsResponseMidocoSalutationItem) : sprintf('%s(%s)', gettype($getSalutationsResponseMidocoSalutationItem), var_export($getSalutationsResponseMidocoSalutationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalutation property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSalutation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalutation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSalutation[] $midocoSalutation
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationsResponse
     */
    public function setMidocoSalutation(?array $midocoSalutation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalutationArrayErrorMessage = self::validateMidocoSalutationForArrayConstraintFromSetMidocoSalutation($midocoSalutation))) {
            throw new InvalidArgumentException($midocoSalutationArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalutation = $midocoSalutation;
        
        return $this;
    }
    /**
     * Add item to MidocoSalutation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSalutation $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationsResponse
     */
    public function addToMidocoSalutation(\Pggns\MidocoApi\Crm\StructType\MidocoSalutation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSalutation) {
            throw new InvalidArgumentException(sprintf('The MidocoSalutation property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSalutation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalutation[] = $item;
        
        return $this;
    }
}
