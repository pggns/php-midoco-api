<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelNumberRequest StructType
 * @subpackage Structs
 */
class DeleteTravelNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for DeleteTravelNumberRequest
     * @uses DeleteTravelNumberRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
