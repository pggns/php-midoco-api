<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoGuiAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveMidocoGuiAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoGuiAttributeDefinition
     * @var \Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO $MidocoGuiAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoGuiAttributeDefinitionRequest
     * @uses SaveMidocoGuiAttributeDefinitionRequest::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null)
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO|null
     */
    public function getMidocoGuiAttributeDefinition(): ?\Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @param \Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoGuiAttributeDefinitionRequest
     */
    public function setMidocoGuiAttributeDefinition(?\Pggns\MidocoApi\Api\System\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null): self
    {
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
}
