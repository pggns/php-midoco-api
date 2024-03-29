<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTssClientRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientRequest
     * @uses GetTssClientRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
