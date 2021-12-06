<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTamaraPositionRequest StructType
 * @subpackage Structs
 */
class DeleteTamaraPositionRequest extends AbstractStructBase
{
    /**
     * The MidocoTamaraPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTamaraPosition
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition[]
     */
    protected ?array $MidocoTamaraPosition = null;
    /**
     * Constructor method for DeleteTamaraPositionRequest
     * @uses DeleteTamaraPositionRequest::setMidocoTamaraPosition()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     */
    public function __construct(?array $midocoTamaraPosition = null)
    {
        $this
            ->setMidocoTamaraPosition($midocoTamaraPosition);
    }
    /**
     * Get MidocoTamaraPosition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition[]
     */
    public function getMidocoTamaraPosition(): ?array
    {
        return $this->MidocoTamaraPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTamaraPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTamaraPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTamaraPositionForArrayConstraintsFromSetMidocoTamaraPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteTamaraPositionRequestMidocoTamaraPositionItem) {
            // validation for constraint: itemType
            if (!$deleteTamaraPositionRequestMidocoTamaraPositionItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition) {
                $invalidValues[] = is_object($deleteTamaraPositionRequestMidocoTamaraPositionItem) ? get_class($deleteTamaraPositionRequestMidocoTamaraPositionItem) : sprintf('%s(%s)', gettype($deleteTamaraPositionRequestMidocoTamaraPositionItem), var_export($deleteTamaraPositionRequestMidocoTamaraPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteTamaraPositionRequest
     */
    public function setMidocoTamaraPosition(?array $midocoTamaraPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTamaraPositionArrayErrorMessage = self::validateMidocoTamaraPositionForArrayConstraintsFromSetMidocoTamaraPosition($midocoTamaraPosition))) {
            throw new InvalidArgumentException($midocoTamaraPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTamaraPosition = $midocoTamaraPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteTamaraPositionRequest
     */
    public function addToMidocoTamaraPosition(\Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTamaraPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTamaraPosition[] = $item;
        
        return $this;
    }
}
