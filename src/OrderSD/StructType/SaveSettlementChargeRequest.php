<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSettlementChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSettlementChargeRequest extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO $MidocoSettlementCharge = null;
    /**
     * Constructor method for SaveSettlementChargeRequest
     * @uses SaveSettlementChargeRequest::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO $midocoSettlementCharge
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO $midocoSettlementCharge = null)
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO|null
     */
    public function getMidocoSettlementCharge(): ?\Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * Set MidocoSettlementCharge value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO $midocoSettlementCharge
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeRequest
     */
    public function setMidocoSettlementCharge(?\Pggns\MidocoApi\OrderSD\StructType\SettlementChargeDTO $midocoSettlementCharge = null): self
    {
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
}
