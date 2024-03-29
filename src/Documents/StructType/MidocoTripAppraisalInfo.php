<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTripAppraisalInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTripAppraisalInfo extends AbstractStructBase
{
    /**
     * The TripAppraisalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo[]
     */
    protected ?array $TripAppraisalInfo = null;
    /**
     * Constructor method for MidocoTripAppraisalInfo
     * @uses MidocoTripAppraisalInfo::setTripAppraisalInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo[] $tripAppraisalInfo
     */
    public function __construct(?array $tripAppraisalInfo = null)
    {
        $this
            ->setTripAppraisalInfo($tripAppraisalInfo);
    }
    /**
     * Get TripAppraisalInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo[]
     */
    public function getTripAppraisalInfo(): ?array
    {
        return $this->TripAppraisalInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTripAppraisalInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTripAppraisalInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTripAppraisalInfoForArrayConstraintFromSetTripAppraisalInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTripAppraisalInfoTripAppraisalInfoItem) {
            // validation for constraint: itemType
            if (!$midocoTripAppraisalInfoTripAppraisalInfoItem instanceof \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo) {
                $invalidValues[] = is_object($midocoTripAppraisalInfoTripAppraisalInfoItem) ? get_class($midocoTripAppraisalInfoTripAppraisalInfoItem) : sprintf('%s(%s)', gettype($midocoTripAppraisalInfoTripAppraisalInfoItem), var_export($midocoTripAppraisalInfoTripAppraisalInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TripAppraisalInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TripAppraisalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo[] $tripAppraisalInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTripAppraisalInfo
     */
    public function setTripAppraisalInfo(?array $tripAppraisalInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($tripAppraisalInfoArrayErrorMessage = self::validateTripAppraisalInfoForArrayConstraintFromSetTripAppraisalInfo($tripAppraisalInfo))) {
            throw new InvalidArgumentException($tripAppraisalInfoArrayErrorMessage, __LINE__);
        }
        $this->TripAppraisalInfo = $tripAppraisalInfo;
        
        return $this;
    }
    /**
     * Add item to TripAppraisalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTripAppraisalInfo
     */
    public function addToTripAppraisalInfo(\Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo) {
            throw new InvalidArgumentException(sprintf('The TripAppraisalInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\TripAppraisalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TripAppraisalInfo[] = $item;
        
        return $this;
    }
}
