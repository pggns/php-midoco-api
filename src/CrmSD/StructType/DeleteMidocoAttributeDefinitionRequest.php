<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for DeleteMidocoAttributeDefinitionRequest
     * @uses DeleteMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\Crmsd\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}
