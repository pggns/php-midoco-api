<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCommissions --- returns the list of commissions
 * @subpackage Structs
 */
class GetCommissionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionExt
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO[]
     */
    protected ?array $MidocoCommissionExt = null;
    /**
     * Constructor method for GetCommissionsResponse
     * @uses GetCommissionsResponse::setMidocoCommissionExt()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO[] $midocoCommissionExt
     */
    public function __construct(?array $midocoCommissionExt = null)
    {
        $this
            ->setMidocoCommissionExt($midocoCommissionExt);
    }
    /**
     * Get MidocoCommissionExt value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO[]
     */
    public function getMidocoCommissionExt(): ?array
    {
        return $this->MidocoCommissionExt;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionExt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionExtForArrayConstraintsFromSetMidocoCommissionExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionsResponseMidocoCommissionExtItem) {
            // validation for constraint: itemType
            if (!$getCommissionsResponseMidocoCommissionExtItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO) {
                $invalidValues[] = is_object($getCommissionsResponseMidocoCommissionExtItem) ? get_class($getCommissionsResponseMidocoCommissionExtItem) : sprintf('%s(%s)', gettype($getCommissionsResponseMidocoCommissionExtItem), var_export($getCommissionsResponseMidocoCommissionExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionExt property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO[] $midocoCommissionExt
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCommissionsResponse
     */
    public function setMidocoCommissionExt(?array $midocoCommissionExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionExtArrayErrorMessage = self::validateMidocoCommissionExtForArrayConstraintsFromSetMidocoCommissionExt($midocoCommissionExt))) {
            throw new InvalidArgumentException($midocoCommissionExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionExt = $midocoCommissionExt;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCommissionsResponse
     */
    public function addToMidocoCommissionExt(\Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionExt property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CommissionExtDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionExt[] = $item;
        
        return $this;
    }
}
