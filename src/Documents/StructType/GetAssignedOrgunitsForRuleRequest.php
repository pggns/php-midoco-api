<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedOrgunitsForRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedOrgunitsForRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssignSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssignSearchCriteria
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria $MidocoRuleAssignSearchCriteria = null;
    /**
     * Constructor method for GetAssignedOrgunitsForRuleRequest
     * @uses GetAssignedOrgunitsForRuleRequest::setMidocoRuleAssignSearchCriteria()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null)
    {
        $this
            ->setMidocoRuleAssignSearchCriteria($midocoRuleAssignSearchCriteria);
    }
    /**
     * Get MidocoRuleAssignSearchCriteria value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria|null
     */
    public function getMidocoRuleAssignSearchCriteria(): ?\Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria
    {
        return $this->MidocoRuleAssignSearchCriteria;
    }
    /**
     * Set MidocoRuleAssignSearchCriteria value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     * @return \Pggns\MidocoApi\Documents\StructType\GetAssignedOrgunitsForRuleRequest
     */
    public function setMidocoRuleAssignSearchCriteria(?\Pggns\MidocoApi\Documents\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null): self
    {
        $this->MidocoRuleAssignSearchCriteria = $midocoRuleAssignSearchCriteria;
        
        return $this;
    }
}
