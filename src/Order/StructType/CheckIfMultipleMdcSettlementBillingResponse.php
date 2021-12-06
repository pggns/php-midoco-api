<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfMultipleMdcSettlementBillingResponse StructType
 * @subpackage Structs
 */
class CheckIfMultipleMdcSettlementBillingResponse extends AbstractStructBase
{
    /**
     * The docIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $docIds = null;
    /**
     * Constructor method for CheckIfMultipleMdcSettlementBillingResponse
     * @uses CheckIfMultipleMdcSettlementBillingResponse::setDocIds()
     * @param int[] $docIds
     */
    public function __construct(?array $docIds = null)
    {
        $this
            ->setDocIds($docIds);
    }
    /**
     * Get docIds value
     * @return int[]
     */
    public function getDocIds(): ?array
    {
        return $this->docIds;
    }
    /**
     * This method is responsible for validating the values passed to the setDocIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocIdsForArrayConstraintsFromSetDocIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkIfMultipleMdcSettlementBillingResponseDocIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($checkIfMultipleMdcSettlementBillingResponseDocIdsItem) || ctype_digit($checkIfMultipleMdcSettlementBillingResponseDocIdsItem))) {
                $invalidValues[] = is_object($checkIfMultipleMdcSettlementBillingResponseDocIdsItem) ? get_class($checkIfMultipleMdcSettlementBillingResponseDocIdsItem) : sprintf('%s(%s)', gettype($checkIfMultipleMdcSettlementBillingResponseDocIdsItem), var_export($checkIfMultipleMdcSettlementBillingResponseDocIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The docIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set docIds value
     * @throws InvalidArgumentException
     * @param int[] $docIds
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingResponse
     */
    public function setDocIds(?array $docIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($docIdsArrayErrorMessage = self::validateDocIdsForArrayConstraintsFromSetDocIds($docIds))) {
            throw new InvalidArgumentException($docIdsArrayErrorMessage, __LINE__);
        }
        $this->docIds = $docIds;
        
        return $this;
    }
    /**
     * Add item to docIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingResponse
     */
    public function addToDocIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The docIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->docIds[] = $item;
        
        return $this;
    }
}
