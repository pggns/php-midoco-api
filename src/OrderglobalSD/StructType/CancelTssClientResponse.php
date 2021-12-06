<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTssClientResponse StructType
 * @subpackage Structs
 */
class CancelTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for CancelTssClientResponse
     * @uses CancelTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\CancelTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
