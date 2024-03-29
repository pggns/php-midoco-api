<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductTypeMediatorConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteProductTypeMediatorConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for DeleteProductTypeMediatorConditionResponse
     * @uses DeleteProductTypeMediatorConditionResponse::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionResponse
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}
