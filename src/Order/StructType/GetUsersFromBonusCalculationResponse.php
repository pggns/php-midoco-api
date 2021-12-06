<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersFromBonusCalculationResponse StructType
 * @subpackage Structs
 */
class GetUsersFromBonusCalculationResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBonusEmployee
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee[]
     */
    protected ?array $MidocoBonusEmployee = null;
    /**
     * Constructor method for GetUsersFromBonusCalculationResponse
     * @uses GetUsersFromBonusCalculationResponse::setMidocoBonusEmployee()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee[] $midocoBonusEmployee
     */
    public function __construct(?array $midocoBonusEmployee = null)
    {
        $this
            ->setMidocoBonusEmployee($midocoBonusEmployee);
    }
    /**
     * Get MidocoBonusEmployee value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee[]
     */
    public function getMidocoBonusEmployee(): ?array
    {
        return $this->MidocoBonusEmployee;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBonusEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusEmployeeForArrayConstraintsFromSetMidocoBonusEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem) {
            // validation for constraint: itemType
            if (!$getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee) {
                $invalidValues[] = is_object($getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem) ? get_class($getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem) : sprintf('%s(%s)', gettype($getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem), var_export($getUsersFromBonusCalculationResponseMidocoBonusEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusEmployee property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee[] $midocoBonusEmployee
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationResponse
     */
    public function setMidocoBonusEmployee(?array $midocoBonusEmployee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusEmployeeArrayErrorMessage = self::validateMidocoBonusEmployeeForArrayConstraintsFromSetMidocoBonusEmployee($midocoBonusEmployee))) {
            throw new InvalidArgumentException($midocoBonusEmployeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusEmployee = $midocoBonusEmployee;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationResponse
     */
    public function addToMidocoBonusEmployee(\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusEmployee property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusEmployee[] = $item;
        
        return $this;
    }
}
