<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleSetsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRuleSetsRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSetSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSetSearchCriteria
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria $MidocoRuleSetSearchCriteria = null;
    /**
     * Constructor method for GetRuleSetsRequest
     * @uses GetRuleSetsRequest::setMidocoRuleSetSearchCriteria()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null)
    {
        $this
            ->setMidocoRuleSetSearchCriteria($midocoRuleSetSearchCriteria);
    }
    /**
     * Get MidocoRuleSetSearchCriteria value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria|null
     */
    public function getMidocoRuleSetSearchCriteria(): ?\Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria
    {
        return $this->MidocoRuleSetSearchCriteria;
    }
    /**
     * Set MidocoRuleSetSearchCriteria value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     * @return \Pggns\MidocoApi\Documents\StructType\GetRuleSetsRequest
     */
    public function setMidocoRuleSetSearchCriteria(?\Pggns\MidocoApi\Documents\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null): self
    {
        $this->MidocoRuleSetSearchCriteria = $midocoRuleSetSearchCriteria;
        
        return $this;
    }
}
