<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyTssClientResponse StructType
 * @subpackage Structs
 */
class ModifyTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for ModifyTssClientResponse
     * @uses ModifyTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ModifyTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
