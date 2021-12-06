<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierSettlPaymentConditionRequest StructType
 * @subpackage Structs
 */
class GetSupplierSettlPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO $MidocoTravelInfo = null;
    /**
     * Constructor method for GetSupplierSettlPaymentConditionRequest
     * @uses GetSupplierSettlPaymentConditionRequest::setMidocoTravelInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo = null)
    {
        $this
            ->setMidocoTravelInfo($midocoTravelInfo);
    }
    /**
     * Get MidocoTravelInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO|null
     */
    public function getMidocoTravelInfo(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO
    {
        return $this->MidocoTravelInfo;
    }
    /**
     * Set MidocoTravelInfo value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierSettlPaymentConditionRequest
     */
    public function setMidocoTravelInfo(?\Pggns\MidocoApi\Api\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo = null): self
    {
        $this->MidocoTravelInfo = $midocoTravelInfo;
        
        return $this;
    }
}
