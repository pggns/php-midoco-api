<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountRequest StructType
 * @subpackage Structs
 */
class SearchAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SearchAccountRequest
     * @uses SearchAccountRequest::setMidocoAccount()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
