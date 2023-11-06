<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoGuiAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoGuiAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoGuiAttributeDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO $MidocoGuiAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoGuiAttributeDefinitionResponse
     * @uses SaveMidocoGuiAttributeDefinitionResponse::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null)
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO|null
     */
    public function getMidocoGuiAttributeDefinition(): ?\Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @param \Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoGuiAttributeDefinitionResponse
     */
    public function setMidocoGuiAttributeDefinition(?\Pggns\MidocoApi\Crm\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null): self
    {
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
}
