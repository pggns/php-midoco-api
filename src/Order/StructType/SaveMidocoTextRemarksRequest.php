<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
class SaveMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for SaveMidocoTextRemarksRequest
     * @uses SaveMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
