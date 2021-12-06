<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAirportCodeRequest StructType
 * @subpackage Structs
 */
class SaveAirportCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for SaveAirportCodeRequest
     * @uses SaveAirportCodeRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveAirportCodeRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
