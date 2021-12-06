<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoFeeTypeResponse StructType
 * @subpackage Structs
 */
class GetMidocoFeeTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for GetMidocoFeeTypeResponse
     * @uses GetMidocoFeeTypeResponse::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoFeeTypeResponse
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Api\Order\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
