<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderLockPeriodRequest StructType
 * @subpackage Structs
 */
class GetOrderLockPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockPeriod
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockPeriod
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod $MidocoOrderLockPeriod = null;
    /**
     * Constructor method for GetOrderLockPeriodRequest
     * @uses GetOrderLockPeriodRequest::setMidocoOrderLockPeriod()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod $midocoOrderLockPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod $midocoOrderLockPeriod = null)
    {
        $this
            ->setMidocoOrderLockPeriod($midocoOrderLockPeriod);
    }
    /**
     * Get MidocoOrderLockPeriod value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod|null
     */
    public function getMidocoOrderLockPeriod(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod
    {
        return $this->MidocoOrderLockPeriod;
    }
    /**
     * Set MidocoOrderLockPeriod value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod $midocoOrderLockPeriod
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderLockPeriodRequest
     */
    public function setMidocoOrderLockPeriod(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderLockPeriod $midocoOrderLockPeriod = null): self
    {
        $this->MidocoOrderLockPeriod = $midocoOrderLockPeriod;
        
        return $this;
    }
}