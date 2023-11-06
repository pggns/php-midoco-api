<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePaymentProviderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePaymentProviderRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentProvider
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProvider
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $MidocoPaymentProvider = null;
    /**
     * Constructor method for DeletePaymentProviderRequest
     * @uses DeletePaymentProviderRequest::setMidocoPaymentProvider()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $midocoPaymentProvider
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $midocoPaymentProvider = null)
    {
        $this
            ->setMidocoPaymentProvider($midocoPaymentProvider);
    }
    /**
     * Get MidocoPaymentProvider value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider|null
     */
    public function getMidocoPaymentProvider(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider
    {
        return $this->MidocoPaymentProvider;
    }
    /**
     * Set MidocoPaymentProvider value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $midocoPaymentProvider
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeletePaymentProviderRequest
     */
    public function setMidocoPaymentProvider(?\Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $midocoPaymentProvider = null): self
    {
        $this->MidocoPaymentProvider = $midocoPaymentProvider;
        
        return $this;
    }
}
