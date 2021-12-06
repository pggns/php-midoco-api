<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeMediatorConditionRequest StructType
 * @subpackage Structs
 */
class SaveProductTypeMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for SaveProductTypeMediatorConditionRequest
     * @uses SaveProductTypeMediatorConditionRequest::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveProductTypeMediatorConditionRequest
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\Api\Orderlists\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}