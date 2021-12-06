<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMdcSettlementBillingsResponse StructType
 * @subpackage Structs
 */
class SearchMdcSettlementBillingsResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementBillingExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingExt
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType[]
     */
    protected ?array $MidocoMdcSettlementBillingExt = null;
    /**
     * Constructor method for SearchMdcSettlementBillingsResponse
     * @uses SearchMdcSettlementBillingsResponse::setMidocoMdcSettlementBillingExt()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType[] $midocoMdcSettlementBillingExt
     */
    public function __construct(?array $midocoMdcSettlementBillingExt = null)
    {
        $this
            ->setMidocoMdcSettlementBillingExt($midocoMdcSettlementBillingExt);
    }
    /**
     * Get MidocoMdcSettlementBillingExt value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType[]
     */
    public function getMidocoMdcSettlementBillingExt(): ?array
    {
        return $this->MidocoMdcSettlementBillingExt;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingExt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingExtForArrayConstraintsFromSetMidocoMdcSettlementBillingExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem) {
            // validation for constraint: itemType
            if (!$searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType) {
                $invalidValues[] = is_object($searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem) ? get_class($searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem) : sprintf('%s(%s)', gettype($searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem), var_export($searchMdcSettlementBillingsResponseMidocoMdcSettlementBillingExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingExt property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType[] $midocoMdcSettlementBillingExt
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchMdcSettlementBillingsResponse
     */
    public function setMidocoMdcSettlementBillingExt(?array $midocoMdcSettlementBillingExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingExtArrayErrorMessage = self::validateMidocoMdcSettlementBillingExtForArrayConstraintsFromSetMidocoMdcSettlementBillingExt($midocoMdcSettlementBillingExt))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingExt = $midocoMdcSettlementBillingExt;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchMdcSettlementBillingsResponse
     */
    public function addToMidocoMdcSettlementBillingExt(\Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingExt property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMdcSettlementBillingExtType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingExt[] = $item;
        
        return $this;
    }
}
