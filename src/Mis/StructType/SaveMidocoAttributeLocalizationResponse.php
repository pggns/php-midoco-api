<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeLocalizationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAttributeLocalizationResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO $MidocoSystemAttributeLocalization = null;
    /**
     * Constructor method for SaveMidocoAttributeLocalizationResponse
     * @uses SaveMidocoAttributeLocalizationResponse::setMidocoSystemAttributeLocalization()
     * @param \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO|null
     */
    public function getMidocoSystemAttributeLocalization(): ?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @param \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMidocoAttributeLocalizationResponse
     */
    public function setMidocoSystemAttributeLocalization(?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null): self
    {
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
}
