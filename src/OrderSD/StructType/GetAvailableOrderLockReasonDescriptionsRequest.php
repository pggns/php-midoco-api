<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrderLockReasonDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetAvailableOrderLockReasonDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO $MidocoOrderLockReason = null;
    /**
     * Constructor method for GetAvailableOrderLockReasonDescriptionsRequest
     * @uses GetAvailableOrderLockReasonDescriptionsRequest::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO $midocoOrderLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO $midocoOrderLockReason = null)
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO|null
     */
    public function getMidocoOrderLockReason(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * Set MidocoOrderLockReason value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest
     */
    public function setMidocoOrderLockReason(?\Pggns\MidocoApi\Api\OrderSD\StructType\OrderLockReasonDTO $midocoOrderLockReason = null): self
    {
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
}
