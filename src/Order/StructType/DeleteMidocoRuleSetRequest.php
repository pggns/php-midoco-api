<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoRuleSetRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoRuleSetRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Api\Order\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for DeleteMidocoRuleSetRequest
     * @uses DeleteMidocoRuleSetRequest::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Api\Order\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Api\Order\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Api\Order\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Api\Order\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteMidocoRuleSetRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Api\Order\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
