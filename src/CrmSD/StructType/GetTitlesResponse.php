<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTitlesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the titles of persons
 * @subpackage Structs
 */
class GetTitlesResponse extends AbstractStructBase
{
    /**
     * The MidocoTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTitle
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle[]
     */
    protected ?array $MidocoTitle = null;
    /**
     * Constructor method for GetTitlesResponse
     * @uses GetTitlesResponse::setMidocoTitle()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle[] $midocoTitle
     */
    public function __construct(?array $midocoTitle = null)
    {
        $this
            ->setMidocoTitle($midocoTitle);
    }
    /**
     * Get MidocoTitle value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle[]
     */
    public function getMidocoTitle(): ?array
    {
        return $this->MidocoTitle;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTitle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTitleForArrayConstraintsFromSetMidocoTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTitlesResponseMidocoTitleItem) {
            // validation for constraint: itemType
            if (!$getTitlesResponseMidocoTitleItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle) {
                $invalidValues[] = is_object($getTitlesResponseMidocoTitleItem) ? get_class($getTitlesResponseMidocoTitleItem) : sprintf('%s(%s)', gettype($getTitlesResponseMidocoTitleItem), var_export($getTitlesResponseMidocoTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTitle property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle[] $midocoTitle
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetTitlesResponse
     */
    public function setMidocoTitle(?array $midocoTitle = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTitleArrayErrorMessage = self::validateMidocoTitleForArrayConstraintsFromSetMidocoTitle($midocoTitle))) {
            throw new InvalidArgumentException($midocoTitleArrayErrorMessage, __LINE__);
        }
        $this->MidocoTitle = $midocoTitle;
        
        return $this;
    }
    /**
     * Add item to MidocoTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetTitlesResponse
     */
    public function addToMidocoTitle(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle) {
            throw new InvalidArgumentException(sprintf('The MidocoTitle property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoTitle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTitle[] = $item;
        
        return $this;
    }
}
