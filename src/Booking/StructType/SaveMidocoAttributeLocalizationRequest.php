<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeLocalizationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAttributeLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $MidocoSystemAttributeLocalization = null;
    /**
     * The isNew
     * @var bool|null
     */
    protected ?bool $isNew = null;
    /**
     * Constructor method for SaveMidocoAttributeLocalizationRequest
     * @uses SaveMidocoAttributeLocalizationRequest::setMidocoSystemAttributeLocalization()
     * @uses SaveMidocoAttributeLocalizationRequest::setIsNew()
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @param bool $isNew
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null, ?bool $isNew = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization)
            ->setIsNew($isNew);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO|null
     */
    public function getMidocoSystemAttributeLocalization(): ?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\Booking\StructType\SaveMidocoAttributeLocalizationRequest
     */
    public function setMidocoSystemAttributeLocalization(?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null): self
    {
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
    /**
     * Get isNew value
     * @return bool|null
     */
    public function getIsNew(): ?bool
    {
        return $this->isNew;
    }
    /**
     * Set isNew value
     * @param bool $isNew
     * @return \Pggns\MidocoApi\Booking\StructType\SaveMidocoAttributeLocalizationRequest
     */
    public function setIsNew(?bool $isNew = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->isNew = $isNew;
        
        return $this;
    }
}
