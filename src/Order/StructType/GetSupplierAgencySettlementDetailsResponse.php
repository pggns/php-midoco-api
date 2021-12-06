<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencySettlementDetailsResponse StructType
 * @subpackage Structs
 */
class GetSupplierAgencySettlementDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementDetail
     * @var \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO[]
     */
    protected ?array $MidocoSupplierAgencySettlementDetail = null;
    /**
     * Constructor method for GetSupplierAgencySettlementDetailsResponse
     * @uses GetSupplierAgencySettlementDetailsResponse::setMidocoSupplierAgencySettlementDetail()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO[] $midocoSupplierAgencySettlementDetail
     */
    public function __construct(?array $midocoSupplierAgencySettlementDetail = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementDetail($midocoSupplierAgencySettlementDetail);
    }
    /**
     * Get MidocoSupplierAgencySettlementDetail value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO[]
     */
    public function getMidocoSupplierAgencySettlementDetail(): ?array
    {
        return $this->MidocoSupplierAgencySettlementDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAgencySettlementDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementDetailForArrayConstraintsFromSetMidocoSupplierAgencySettlementDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem) {
            // validation for constraint: itemType
            if (!$getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem instanceof \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO) {
                $invalidValues[] = is_object($getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem) ? get_class($getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem) : sprintf('%s(%s)', gettype($getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem), var_export($getSupplierAgencySettlementDetailsResponseMidocoSupplierAgencySettlementDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementDetail property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO[] $midocoSupplierAgencySettlementDetail
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsResponse
     */
    public function setMidocoSupplierAgencySettlementDetail(?array $midocoSupplierAgencySettlementDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementDetailArrayErrorMessage = self::validateMidocoSupplierAgencySettlementDetailForArrayConstraintsFromSetMidocoSupplierAgencySettlementDetail($midocoSupplierAgencySettlementDetail))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementDetail = $midocoSupplierAgencySettlementDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsResponse
     */
    public function addToMidocoSupplierAgencySettlementDetail(\Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementDetail property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementDetail[] = $item;
        
        return $this;
    }
}
