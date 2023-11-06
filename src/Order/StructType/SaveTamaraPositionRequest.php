<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTamaraPositionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTamaraPositionRequest extends AbstractStructBase
{
    /**
     * The MidocoTamaraPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTamaraPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[]
     */
    protected ?array $MidocoTamaraPosition = null;
    /**
     * Constructor method for SaveTamaraPositionRequest
     * @uses SaveTamaraPositionRequest::setMidocoTamaraPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     */
    public function __construct(?array $midocoTamaraPosition = null)
    {
        $this
            ->setMidocoTamaraPosition($midocoTamaraPosition);
    }
    /**
     * Get MidocoTamaraPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[]
     */
    public function getMidocoTamaraPosition(): ?array
    {
        return $this->MidocoTamaraPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTamaraPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTamaraPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTamaraPositionForArrayConstraintFromSetMidocoTamaraPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveTamaraPositionRequestMidocoTamaraPositionItem) {
            // validation for constraint: itemType
            if (!$saveTamaraPositionRequestMidocoTamaraPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition) {
                $invalidValues[] = is_object($saveTamaraPositionRequestMidocoTamaraPositionItem) ? get_class($saveTamaraPositionRequestMidocoTamaraPositionItem) : sprintf('%s(%s)', gettype($saveTamaraPositionRequestMidocoTamaraPositionItem), var_export($saveTamaraPositionRequestMidocoTamaraPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     * @return \Pggns\MidocoApi\Order\StructType\SaveTamaraPositionRequest
     */
    public function setMidocoTamaraPosition(?array $midocoTamaraPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTamaraPositionArrayErrorMessage = self::validateMidocoTamaraPositionForArrayConstraintFromSetMidocoTamaraPosition($midocoTamaraPosition))) {
            throw new InvalidArgumentException($midocoTamaraPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTamaraPosition = $midocoTamaraPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveTamaraPositionRequest
     */
    public function addToMidocoTamaraPosition(\Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTamaraPosition[] = $item;
        
        return $this;
    }
}
