<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementSellItemDetailsRequest StructType
 * @subpackage Structs
 */
class GetMidocoAgencySettlementSellItemDetailsRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo $MidocoAgencyProvisionInfo = null;
    /**
     * Constructor method for GetMidocoAgencySettlementSellItemDetailsRequest
     * @uses GetMidocoAgencySettlementSellItemDetailsRequest::setMidocoAgencyProvisionInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo = null)
    {
        $this
            ->setMidocoAgencyProvisionInfo($midocoAgencyProvisionInfo);
    }
    /**
     * Get MidocoAgencyProvisionInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo|null
     */
    public function getMidocoAgencyProvisionInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo
    {
        return $this->MidocoAgencyProvisionInfo;
    }
    /**
     * Set MidocoAgencyProvisionInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementSellItemDetailsRequest
     */
    public function setMidocoAgencyProvisionInfo(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo = null): self
    {
        $this->MidocoAgencyProvisionInfo = $midocoAgencyProvisionInfo;
        
        return $this;
    }
}
