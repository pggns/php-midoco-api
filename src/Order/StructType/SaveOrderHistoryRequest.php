<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderHistoryRequest StructType
 * @subpackage Structs
 */
class SaveOrderHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderHistory
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory $MidocoOrderHistory = null;
    /**
     * Constructor method for SaveOrderHistoryRequest
     * @uses SaveOrderHistoryRequest::setMidocoOrderHistory()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory $midocoOrderHistory
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory $midocoOrderHistory = null)
    {
        $this
            ->setMidocoOrderHistory($midocoOrderHistory);
    }
    /**
     * Get MidocoOrderHistory value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory|null
     */
    public function getMidocoOrderHistory(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory
    {
        return $this->MidocoOrderHistory;
    }
    /**
     * Set MidocoOrderHistory value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory $midocoOrderHistory
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderHistoryRequest
     */
    public function setMidocoOrderHistory(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderHistory $midocoOrderHistory = null): self
    {
        $this->MidocoOrderHistory = $midocoOrderHistory;
        
        return $this;
    }
}
