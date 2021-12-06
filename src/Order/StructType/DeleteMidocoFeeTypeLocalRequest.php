<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoFeeTypeLocalRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: remove a fee type local
 * @subpackage Structs
 */
class DeleteMidocoFeeTypeLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeLocalRequest
     * @uses DeleteMidocoFeeTypeLocalRequest::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteMidocoFeeTypeLocalRequest
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Api\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}