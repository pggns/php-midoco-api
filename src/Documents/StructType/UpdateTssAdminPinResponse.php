<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTssAdminPinResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The updated MidocoTssClient.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateTssAdminPinResponse extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for UpdateTssAdminPinResponse
     * @uses UpdateTssAdminPinResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Documents\StructType\UpdateTssAdminPinResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
