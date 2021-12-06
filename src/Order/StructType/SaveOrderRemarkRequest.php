<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRemarkRequest StructType
 * @subpackage Structs
 */
class SaveOrderRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderRemark
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $MidocoOrderRemark = null;
    /**
     * Constructor method for SaveOrderRemarkRequest
     * @uses SaveOrderRemarkRequest::setMidocoOrderRemark()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null)
    {
        $this
            ->setMidocoOrderRemark($midocoOrderRemark);
    }
    /**
     * Get MidocoOrderRemark value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO|null
     */
    public function getMidocoOrderRemark(): ?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO
    {
        return $this->MidocoOrderRemark;
    }
    /**
     * Set MidocoOrderRemark value
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderRemarkRequest
     */
    public function setMidocoOrderRemark(?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null): self
    {
        $this->MidocoOrderRemark = $midocoOrderRemark;
        
        return $this;
    }
}
