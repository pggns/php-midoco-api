<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCodesRequest StructType
 * @subpackage Structs
 */
class GetAirportCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for GetAirportCodesRequest
     * @uses GetAirportCodesRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAirportCodesRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
