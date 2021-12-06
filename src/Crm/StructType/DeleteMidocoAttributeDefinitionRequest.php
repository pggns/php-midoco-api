<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for DeleteMidocoAttributeDefinitionRequest
     * @uses DeleteMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}