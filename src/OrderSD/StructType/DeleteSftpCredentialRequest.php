<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSftpCredentialRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for DeleteSftpCredentialRequest
     * @uses DeleteSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\OrderSD\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
