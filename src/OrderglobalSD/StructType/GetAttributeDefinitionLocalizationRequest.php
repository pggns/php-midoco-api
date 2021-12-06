<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeDefinitionLocalizationRequest StructType
 * @subpackage Structs
 */
class GetAttributeDefinitionLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoAttributeDefinition
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationRequest
     * @uses GetAttributeDefinitionLocalizationRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAttributeDefinitionLocalizationRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
