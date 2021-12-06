<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyRateResponse StructType
 * @subpackage Structs
 */
class GetCurrencyRateResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRate
     * Meta information extracted from the WSDL
     * - ref: MidocoCurrencyRate
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate $MidocoCurrencyRate = null;
    /**
     * Constructor method for GetCurrencyRateResponse
     * @uses GetCurrencyRateResponse::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate = null)
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate|null
     */
    public function getMidocoCurrencyRate(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * Set MidocoCurrencyRate value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetCurrencyRateResponse
     */
    public function setMidocoCurrencyRate(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate = null): self
    {
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
}
