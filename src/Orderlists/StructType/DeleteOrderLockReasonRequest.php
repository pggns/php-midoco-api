<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderLockReasonRequest StructType
 * @subpackage Structs
 */
class DeleteOrderLockReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO $MidocoOrderLockReason = null;
    /**
     * Constructor method for DeleteOrderLockReasonRequest
     * @uses DeleteOrderLockReasonRequest::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO $midocoOrderLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO $midocoOrderLockReason = null)
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO|null
     */
    public function getMidocoOrderLockReason(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * Set MidocoOrderLockReason value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteOrderLockReasonRequest
     */
    public function setMidocoOrderLockReason(?\Pggns\MidocoApi\Api\Orderlists\StructType\OrderLockReasonDTO $midocoOrderLockReason = null): self
    {
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
}
