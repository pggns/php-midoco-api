<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchKSichVExportProtocolResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchKSichVExportProtocolResponse extends AbstractStructBase
{
    /**
     * The MidocoTssExportProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MidocoTssExportProtocol = null;
    /**
     * Constructor method for SearchKSichVExportProtocolResponse
     * @uses SearchKSichVExportProtocolResponse::setMidocoTssExportProtocol()
     * @param string[] $midocoTssExportProtocol
     */
    public function __construct(?array $midocoTssExportProtocol = null)
    {
        $this
            ->setMidocoTssExportProtocol($midocoTssExportProtocol);
    }
    /**
     * Get MidocoTssExportProtocol value
     * @return string[]
     */
    public function getMidocoTssExportProtocol(): ?array
    {
        return $this->MidocoTssExportProtocol;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTssExportProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssExportProtocol method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssExportProtocolForArrayConstraintFromSetMidocoTssExportProtocol(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchKSichVExportProtocolResponseMidocoTssExportProtocolItem) {
            // validation for constraint: itemType
            if (!is_string($searchKSichVExportProtocolResponseMidocoTssExportProtocolItem)) {
                $invalidValues[] = is_object($searchKSichVExportProtocolResponseMidocoTssExportProtocolItem) ? get_class($searchKSichVExportProtocolResponseMidocoTssExportProtocolItem) : sprintf('%s(%s)', gettype($searchKSichVExportProtocolResponseMidocoTssExportProtocolItem), var_export($searchKSichVExportProtocolResponseMidocoTssExportProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssExportProtocol property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssExportProtocol value
     * @throws InvalidArgumentException
     * @param string[] $midocoTssExportProtocol
     * @return \Pggns\MidocoApi\Bank\StructType\SearchKSichVExportProtocolResponse
     */
    public function setMidocoTssExportProtocol(?array $midocoTssExportProtocol = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssExportProtocolArrayErrorMessage = self::validateMidocoTssExportProtocolForArrayConstraintFromSetMidocoTssExportProtocol($midocoTssExportProtocol))) {
            throw new InvalidArgumentException($midocoTssExportProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssExportProtocol = $midocoTssExportProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoTssExportProtocol value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchKSichVExportProtocolResponse
     */
    public function addToMidocoTssExportProtocol(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoTssExportProtocol property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssExportProtocol[] = $item;
        
        return $this;
    }
}
