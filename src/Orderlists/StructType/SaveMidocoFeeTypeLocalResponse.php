<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeLocalResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the fee localization
 * @subpackage Structs
 */
class SaveMidocoFeeTypeLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for SaveMidocoFeeTypeLocalResponse
     * @uses SaveMidocoFeeTypeLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMidocoFeeTypeLocalResponse
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Api\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
