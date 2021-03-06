<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClientRequest StructType
 * @subpackage Structs
 */
class GetTssClientRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\System\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientRequest
     * @uses GetTssClientRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\System\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\System\StructType\GetTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\System\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
