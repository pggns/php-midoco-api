<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeChoiceValueResponse StructType
 * @subpackage Structs
 */
class SaveMidocoAttributeChoiceValueResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeChoiceValue
     * @var \Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO $MidocoSystemAttributeChoiceValue = null;
    /**
     * Constructor method for SaveMidocoAttributeChoiceValueResponse
     * @uses SaveMidocoAttributeChoiceValueResponse::setMidocoSystemAttributeChoiceValue()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null)
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO|null
     */
    public function getMidocoSystemAttributeChoiceValue(): ?\Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\Api\Booking\StructType\SaveMidocoAttributeChoiceValueResponse
     */
    public function setMidocoSystemAttributeChoiceValue(?\Pggns\MidocoApi\Api\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null): self
    {
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
}