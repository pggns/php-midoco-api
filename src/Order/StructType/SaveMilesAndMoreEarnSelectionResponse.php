<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMoreEarnSelectionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The response provides the updated MidocoMilesAndMoreEarnInfo elements for the MidocoSellItems.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMoreEarnSelectionResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreEarnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[]
     */
    protected ?array $MidocoMilesAndMoreEarnInfo = null;
    /**
     * Constructor method for SaveMilesAndMoreEarnSelectionResponse
     * @uses SaveMilesAndMoreEarnSelectionResponse::setMidocoMilesAndMoreEarnInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[] $midocoMilesAndMoreEarnInfo
     */
    public function __construct(?array $midocoMilesAndMoreEarnInfo = null)
    {
        $this
            ->setMidocoMilesAndMoreEarnInfo($midocoMilesAndMoreEarnInfo);
    }
    /**
     * Get MidocoMilesAndMoreEarnInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[]
     */
    public function getMidocoMilesAndMoreEarnInfo(): ?array
    {
        return $this->MidocoMilesAndMoreEarnInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMilesAndMoreEarnInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreEarnInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreEarnInfoForArrayConstraintFromSetMidocoMilesAndMoreEarnInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem) {
            // validation for constraint: itemType
            if (!$saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType) {
                $invalidValues[] = is_object($saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem) ? get_class($saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem) : sprintf('%s(%s)', gettype($saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem), var_export($saveMilesAndMoreEarnSelectionResponseMidocoMilesAndMoreEarnInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreEarnInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreEarnInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[] $midocoMilesAndMoreEarnInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionResponse
     */
    public function setMidocoMilesAndMoreEarnInfo(?array $midocoMilesAndMoreEarnInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreEarnInfoArrayErrorMessage = self::validateMidocoMilesAndMoreEarnInfoForArrayConstraintFromSetMidocoMilesAndMoreEarnInfo($midocoMilesAndMoreEarnInfo))) {
            throw new InvalidArgumentException($midocoMilesAndMoreEarnInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreEarnInfo = $midocoMilesAndMoreEarnInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreEarnInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionResponse
     */
    public function addToMidocoMilesAndMoreEarnInfo(\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreEarnInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreEarnInfo[] = $item;
        
        return $this;
    }
}
