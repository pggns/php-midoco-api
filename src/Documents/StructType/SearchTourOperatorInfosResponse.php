<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTourOperatorInfosResponse StructType
 * @subpackage Structs
 */
class SearchTourOperatorInfosResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInfo
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo $MidocoTourOperatorInfo = null;
    /**
     * Constructor method for SearchTourOperatorInfosResponse
     * @uses SearchTourOperatorInfosResponse::setMidocoTourOperatorInfo()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo $midocoTourOperatorInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo $midocoTourOperatorInfo = null)
    {
        $this
            ->setMidocoTourOperatorInfo($midocoTourOperatorInfo);
    }
    /**
     * Get MidocoTourOperatorInfo value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo|null
     */
    public function getMidocoTourOperatorInfo(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo
    {
        return $this->MidocoTourOperatorInfo;
    }
    /**
     * Set MidocoTourOperatorInfo value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo $midocoTourOperatorInfo
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SearchTourOperatorInfosResponse
     */
    public function setMidocoTourOperatorInfo(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoTourOperatorInfo $midocoTourOperatorInfo = null): self
    {
        $this->MidocoTourOperatorInfo = $midocoTourOperatorInfo;
        
        return $this;
    }
}
