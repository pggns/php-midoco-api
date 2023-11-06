<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCommissionDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDefinition
     * @var \Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO $MidocoCommissionDefinition = null;
    /**
     * Constructor method for SaveCommissionDefinitionRequest
     * @uses SaveCommissionDefinitionRequest::setMidocoCommissionDefinition()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null)
    {
        $this
            ->setMidocoCommissionDefinition($midocoCommissionDefinition);
    }
    /**
     * Get MidocoCommissionDefinition value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO|null
     */
    public function getMidocoCommissionDefinition(): ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO
    {
        return $this->MidocoCommissionDefinition;
    }
    /**
     * Set MidocoCommissionDefinition value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionDefinitionRequest
     */
    public function setMidocoCommissionDefinition(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null): self
    {
        $this->MidocoCommissionDefinition = $midocoCommissionDefinition;
        
        return $this;
    }
}
