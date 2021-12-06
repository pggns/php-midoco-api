<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAreaCodesRequest StructType
 * @subpackage Structs
 */
class GetAreaCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for GetAreaCodesRequest
     * @uses GetAreaCodesRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAreaCodesRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}