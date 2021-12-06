<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
class GetMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for GetMidocoTextRemarksRequest
     * @uses GetMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
