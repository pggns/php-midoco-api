<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for DeleteMidocoTextRemarksRequest
     * @uses DeleteMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
