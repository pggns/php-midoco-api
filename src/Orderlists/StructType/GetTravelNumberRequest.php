<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberRequest StructType
 * @subpackage Structs
 */
class GetTravelNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for GetTravelNumberRequest
     * @uses GetTravelNumberRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTravelNumberRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}