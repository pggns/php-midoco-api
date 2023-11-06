<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSettlementChargeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSettlementChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO $MidocoSettlementCharge = null;
    /**
     * Constructor method for SaveSettlementChargeResponse
     * @uses SaveSettlementChargeResponse::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO $midocoSettlementCharge
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO $midocoSettlementCharge = null)
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO|null
     */
    public function getMidocoSettlementCharge(): ?\Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * Set MidocoSettlementCharge value
     * @param \Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSettlementChargeResponse
     */
    public function setMidocoSettlementCharge(?\Pggns\MidocoApi\Bank\StructType\SettlementChargeDTO $midocoSettlementCharge = null): self
    {
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
}
