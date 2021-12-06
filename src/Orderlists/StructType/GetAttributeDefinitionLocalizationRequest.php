<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationRequest
     * @uses GetAttributeDefinitionLocalizationRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAttributeDefinitionLocalizationRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\Api\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}