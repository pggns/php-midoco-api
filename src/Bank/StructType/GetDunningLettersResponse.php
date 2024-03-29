<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningLettersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDunningLettersResponse extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO[]
     */
    protected ?array $MidocoDunningLetter = null;
    /**
     * Constructor method for GetDunningLettersResponse
     * @uses GetDunningLettersResponse::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO[] $midocoDunningLetter
     */
    public function __construct(?array $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO[]
     */
    public function getMidocoDunningLetter(): ?array
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDunningLetter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunningLetter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningLetterForArrayConstraintFromSetMidocoDunningLetter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDunningLettersResponseMidocoDunningLetterItem) {
            // validation for constraint: itemType
            if (!$getDunningLettersResponseMidocoDunningLetterItem instanceof \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO) {
                $invalidValues[] = is_object($getDunningLettersResponseMidocoDunningLetterItem) ? get_class($getDunningLettersResponseMidocoDunningLetterItem) : sprintf('%s(%s)', gettype($getDunningLettersResponseMidocoDunningLetterItem), var_export($getDunningLettersResponseMidocoDunningLetterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunningLetter property can only contain items of type \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunningLetter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO[] $midocoDunningLetter
     * @return \Pggns\MidocoApi\Bank\StructType\GetDunningLettersResponse
     */
    public function setMidocoDunningLetter(?array $midocoDunningLetter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningLetterArrayErrorMessage = self::validateMidocoDunningLetterForArrayConstraintFromSetMidocoDunningLetter($midocoDunningLetter))) {
            throw new InvalidArgumentException($midocoDunningLetterArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
    /**
     * Add item to MidocoDunningLetter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetDunningLettersResponse
     */
    public function addToMidocoDunningLetter(\Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDunningLetter property can only contain items of type \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunningLetter[] = $item;
        
        return $this;
    }
}
