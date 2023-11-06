<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderLockReasonDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderLockReasonDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO $MidocoOrderLockReason = null;
    /**
     * Constructor method for GetOrderLockReasonDescriptionsRequest
     * @uses GetOrderLockReasonDescriptionsRequest::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO $midocoOrderLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO $midocoOrderLockReason = null)
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO|null
     */
    public function getMidocoOrderLockReason(): ?\Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * Set MidocoOrderLockReason value
     * @param \Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrderLockReasonDescriptionsRequest
     */
    public function setMidocoOrderLockReason(?\Pggns\MidocoApi\Documents\StructType\OrderLockReasonDTO $midocoOrderLockReason = null): self
    {
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
}
