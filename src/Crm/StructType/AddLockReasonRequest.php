<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLockReasonRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddLockReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmLockReason
     * @var \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $MidocoCrmLockReason = null;
    /**
     * Constructor method for AddLockReasonRequest
     * @uses AddLockReasonRequest::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason = null)
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO|null
     */
    public function getMidocoCrmLockReason(): ?\Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * Set MidocoCrmLockReason value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason
     * @return \Pggns\MidocoApi\Crm\StructType\AddLockReasonRequest
     */
    public function setMidocoCrmLockReason(?\Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason = null): self
    {
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
}
