<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClientResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientResponse
     * @uses GetTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
