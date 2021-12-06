<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoGuiAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
class SaveMidocoGuiAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoGuiAttributeDefinition
     * @var \Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO $MidocoGuiAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoGuiAttributeDefinitionResponse
     * @uses SaveMidocoGuiAttributeDefinitionResponse::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null)
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO|null
     */
    public function getMidocoGuiAttributeDefinition(): ?\Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveMidocoGuiAttributeDefinitionResponse
     */
    public function setMidocoGuiAttributeDefinition(?\Pggns\MidocoApi\Api\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null): self
    {
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
}
