<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAirportCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAirportCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for SaveAirportCodeRequest
     * @uses SaveAirportCodeRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveAirportCodeRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
