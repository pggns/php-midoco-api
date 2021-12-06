<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProvidersRequest StructType
 * @subpackage Structs
 */
class GetPaymentProvidersRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentProvider
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProvider
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider $MidocoPaymentProvider = null;
    /**
     * Constructor method for GetPaymentProvidersRequest
     * @uses GetPaymentProvidersRequest::setMidocoPaymentProvider()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider $midocoPaymentProvider
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider $midocoPaymentProvider = null)
    {
        $this
            ->setMidocoPaymentProvider($midocoPaymentProvider);
    }
    /**
     * Get MidocoPaymentProvider value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider|null
     */
    public function getMidocoPaymentProvider(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider
    {
        return $this->MidocoPaymentProvider;
    }
    /**
     * Set MidocoPaymentProvider value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider $midocoPaymentProvider
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProvidersRequest
     */
    public function setMidocoPaymentProvider(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProvider $midocoPaymentProvider = null): self
    {
        $this->MidocoPaymentProvider = $midocoPaymentProvider;
        
        return $this;
    }
}