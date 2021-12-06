<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfResponse StructType
 * @subpackage Structs
 */
class GetMfResponse extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf[]
     */
    protected ?array $MidocoMf = null;
    /**
     * Constructor method for GetMfResponse
     * @uses GetMfResponse::setMidocoMf()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf[] $midocoMf
     */
    public function __construct(?array $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf[]
     */
    public function getMidocoMf(): ?array
    {
        return $this->MidocoMf;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMf method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfForArrayConstraintsFromSetMidocoMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfResponseMidocoMfItem) {
            // validation for constraint: itemType
            if (!$getMfResponseMidocoMfItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf) {
                $invalidValues[] = is_object($getMfResponseMidocoMfItem) ? get_class($getMfResponseMidocoMfItem) : sprintf('%s(%s)', gettype($getMfResponseMidocoMfItem), var_export($getMfResponseMidocoMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf[] $midocoMf
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMfResponse
     */
    public function setMidocoMf(?array $midocoMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfArrayErrorMessage = self::validateMidocoMfForArrayConstraintsFromSetMidocoMf($midocoMf))) {
            throw new InvalidArgumentException($midocoMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
    /**
     * Add item to MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMfResponse
     */
    public function addToMidocoMf(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf) {
            throw new InvalidArgumentException(sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMf[] = $item;
        
        return $this;
    }
}