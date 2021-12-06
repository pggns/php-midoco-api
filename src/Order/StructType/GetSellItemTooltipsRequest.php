<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemTooltipsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Gets the html tooltips for all sell items of a midoco order
 * @subpackage Structs
 */
class GetSellItemTooltipsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * Constructor method for GetSellItemTooltipsRequest
     * @uses GetSellItemTooltipsRequest::setMidocoOrder()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null)
    {
        $this
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemTooltipsRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
}
