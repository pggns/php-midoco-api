<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVerkDataPrintListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVerkDataPrintListResponse extends AbstractStructBase
{
    /**
     * The MidocoVerkDataPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVerkDataPrint
     * @var \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO[]
     */
    protected ?array $MidocoVerkDataPrint = null;
    /**
     * Constructor method for GetVerkDataPrintListResponse
     * @uses GetVerkDataPrintListResponse::setMidocoVerkDataPrint()
     * @param \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     */
    public function __construct(?array $midocoVerkDataPrint = null)
    {
        $this
            ->setMidocoVerkDataPrint($midocoVerkDataPrint);
    }
    /**
     * Get MidocoVerkDataPrint value
     * @return \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO[]
     */
    public function getMidocoVerkDataPrint(): ?array
    {
        return $this->MidocoVerkDataPrint;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVerkDataPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVerkDataPrint method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVerkDataPrintForArrayConstraintFromSetMidocoVerkDataPrint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVerkDataPrintListResponseMidocoVerkDataPrintItem) {
            // validation for constraint: itemType
            if (!$getVerkDataPrintListResponseMidocoVerkDataPrintItem instanceof \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO) {
                $invalidValues[] = is_object($getVerkDataPrintListResponseMidocoVerkDataPrintItem) ? get_class($getVerkDataPrintListResponseMidocoVerkDataPrintItem) : sprintf('%s(%s)', gettype($getVerkDataPrintListResponseMidocoVerkDataPrintItem), var_export($getVerkDataPrintListResponseMidocoVerkDataPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     * @return \Pggns\MidocoApi\Crm\StructType\GetVerkDataPrintListResponse
     */
    public function setMidocoVerkDataPrint(?array $midocoVerkDataPrint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVerkDataPrintArrayErrorMessage = self::validateMidocoVerkDataPrintForArrayConstraintFromSetMidocoVerkDataPrint($midocoVerkDataPrint))) {
            throw new InvalidArgumentException($midocoVerkDataPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoVerkDataPrint = $midocoVerkDataPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetVerkDataPrintListResponse
     */
    public function addToMidocoVerkDataPrint(\Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Crm\StructType\VerkDataPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVerkDataPrint[] = $item;
        
        return $this;
    }
}
