<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeAssignMidocoRuleRequest StructType
 * @subpackage Structs
 */
class DeAssignMidocoRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssign
     * @var \Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO $MidocoRuleAssign = null;
    /**
     * Constructor method for DeAssignMidocoRuleRequest
     * @uses DeAssignMidocoRuleRequest::setMidocoRuleAssign()
     * @param \Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO $midocoRuleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO $midocoRuleAssign = null)
    {
        $this
            ->setMidocoRuleAssign($midocoRuleAssign);
    }
    /**
     * Get MidocoRuleAssign value
     * @return \Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO|null
     */
    public function getMidocoRuleAssign(): ?\Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO
    {
        return $this->MidocoRuleAssign;
    }
    /**
     * Set MidocoRuleAssign value
     * @param \Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO $midocoRuleAssign
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeAssignMidocoRuleRequest
     */
    public function setMidocoRuleAssign(?\Pggns\MidocoApi\Api\Order\StructType\RuleAssignDTO $midocoRuleAssign = null): self
    {
        $this->MidocoRuleAssign = $midocoRuleAssign;
        
        return $this;
    }
}
