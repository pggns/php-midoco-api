<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierPaymentConditionRequest StructType
 * @subpackage Structs
 */
class GetSpecifiedSupplierPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelInfo
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO $MidocoTravelInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierPaymentConditionRequest
     * @uses GetSpecifiedSupplierPaymentConditionRequest::setMidocoTravelInfo()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO $midocoTravelInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO $midocoTravelInfo = null)
    {
        $this
            ->setMidocoTravelInfo($midocoTravelInfo);
    }
    /**
     * Get MidocoTravelInfo value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO|null
     */
    public function getMidocoTravelInfo(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO
    {
        return $this->MidocoTravelInfo;
    }
    /**
     * Set MidocoTravelInfo value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO $midocoTravelInfo
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest
     */
    public function setMidocoTravelInfo(?\Pggns\MidocoApi\Api\OrderSD\StructType\TravelInfoDTO $midocoTravelInfo = null): self
    {
        $this->MidocoTravelInfo = $midocoTravelInfo;
        
        return $this;
    }
}
