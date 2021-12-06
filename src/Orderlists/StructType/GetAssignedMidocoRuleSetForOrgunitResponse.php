<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedMidocoRuleSetForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetAssignedMidocoRuleSetForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for GetAssignedMidocoRuleSetForOrgunitResponse
     * @uses GetAssignedMidocoRuleSetForOrgunitResponse::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAssignedMidocoRuleSetForOrgunitResponse
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Api\Orderlists\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
