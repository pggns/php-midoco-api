<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankAccountRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: save a bank account
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for SaveBankAccountRequest
     * @uses SaveBankAccountRequest::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankAccountRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
