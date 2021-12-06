<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookPrintResponse StructType
 * @subpackage Structs
 */
class SearchCashBookPrintResponse extends AbstractStructBase
{
    /**
     * The CashBookPrintInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CashBookPrintInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO[]
     */
    protected ?array $CashBookPrintInfo = null;
    /**
     * Constructor method for SearchCashBookPrintResponse
     * @uses SearchCashBookPrintResponse::setCashBookPrintInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO[] $cashBookPrintInfo
     */
    public function __construct(?array $cashBookPrintInfo = null)
    {
        $this
            ->setCashBookPrintInfo($cashBookPrintInfo);
    }
    /**
     * Get CashBookPrintInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO[]
     */
    public function getCashBookPrintInfo(): ?array
    {
        return $this->CashBookPrintInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCashBookPrintInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookPrintInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookPrintInfoForArrayConstraintsFromSetCashBookPrintInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCashBookPrintResponseCashBookPrintInfoItem) {
            // validation for constraint: itemType
            if (!$searchCashBookPrintResponseCashBookPrintInfoItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO) {
                $invalidValues[] = is_object($searchCashBookPrintResponseCashBookPrintInfoItem) ? get_class($searchCashBookPrintResponseCashBookPrintInfoItem) : sprintf('%s(%s)', gettype($searchCashBookPrintResponseCashBookPrintInfoItem), var_export($searchCashBookPrintResponseCashBookPrintInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CashBookPrintInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CashBookPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO[] $cashBookPrintInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchCashBookPrintResponse
     */
    public function setCashBookPrintInfo(?array $cashBookPrintInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookPrintInfoArrayErrorMessage = self::validateCashBookPrintInfoForArrayConstraintsFromSetCashBookPrintInfo($cashBookPrintInfo))) {
            throw new InvalidArgumentException($cashBookPrintInfoArrayErrorMessage, __LINE__);
        }
        $this->CashBookPrintInfo = $cashBookPrintInfo;
        
        return $this;
    }
    /**
     * Add item to CashBookPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchCashBookPrintResponse
     */
    public function addToCashBookPrintInfo(\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO) {
            throw new InvalidArgumentException(sprintf('The CashBookPrintInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CashBookPrintInfo[] = $item;
        
        return $this;
    }
}
