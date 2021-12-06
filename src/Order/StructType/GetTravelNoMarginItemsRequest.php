<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNoMarginItemsRequest StructType
 * @subpackage Structs
 */
class GetTravelNoMarginItemsRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $MidocoTravelNoMargin = null;
    /**
     * Constructor method for GetTravelNoMarginItemsRequest
     * @uses GetTravelNoMarginItemsRequest::setMidocoTravelNoMargin()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin|null
     */
    public function getMidocoTravelNoMargin(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMarginItemsRequest
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
}