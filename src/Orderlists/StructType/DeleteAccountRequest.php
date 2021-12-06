<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAccountRequest StructType
 * @subpackage Structs
 */
class DeleteAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for DeleteAccountRequest
     * @uses DeleteAccountRequest::setMidocoAccount()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
