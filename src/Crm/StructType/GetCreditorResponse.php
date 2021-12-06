<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCreditorResponse StructType
 * @subpackage Structs
 */
class GetCreditorResponse extends AbstractStructBase
{
    /**
     * The MidocoCreditor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCreditor
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $MidocoCreditor = null;
    /**
     * Constructor method for GetCreditorResponse
     * @uses GetCreditorResponse::setMidocoCreditor()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor = null)
    {
        $this
            ->setMidocoCreditor($midocoCreditor);
    }
    /**
     * Get MidocoCreditor value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO|null
     */
    public function getMidocoCreditor(): ?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO
    {
        return $this->MidocoCreditor;
    }
    /**
     * Set MidocoCreditor value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCreditorResponse
     */
    public function setMidocoCreditor(?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor = null): self
    {
        $this->MidocoCreditor = $midocoCreditor;
        
        return $this;
    }
}
