<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO $MidocoSystemAttributeDefinition = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for GetMidocoAttributeDefinitionRequest
     * @uses GetMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @uses GetMidocoAttributeDefinitionRequest::setOrgunit()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @param string $orgunit
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null, ?string $orgunit = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition)
            ->setOrgunit($orgunit);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\WorkflowSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoAttributeDefinitionRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
