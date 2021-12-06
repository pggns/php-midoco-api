<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelNumberRequest StructType
 * @subpackage Structs
 */
class SaveTravelNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for SaveTravelNumberRequest
     * @uses SaveTravelNumberRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveTravelNumberRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
