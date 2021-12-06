<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitializeCashBookSignatureResponse StructType
 * @subpackage Structs
 */
class InitializeCashBookSignatureResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookSignature
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookSignature
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature $MidocoCashBookSignature = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for InitializeCashBookSignatureResponse
     * @uses InitializeCashBookSignatureResponse::setMidocoCashBookSignature()
     * @uses InitializeCashBookSignatureResponse::setRepositoryId()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @param int $repositoryId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature = null, ?int $repositoryId = null)
    {
        $this
            ->setMidocoCashBookSignature($midocoCashBookSignature)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get MidocoCashBookSignature value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature|null
     */
    public function getMidocoCashBookSignature(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature
    {
        return $this->MidocoCashBookSignature;
    }
    /**
     * Set MidocoCashBookSignature value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @return \Pggns\MidocoApi\Api\Order\StructType\InitializeCashBookSignatureResponse
     */
    public function setMidocoCashBookSignature(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature = null): self
    {
        $this->MidocoCashBookSignature = $midocoCashBookSignature;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Api\Order\StructType\InitializeCashBookSignatureResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
