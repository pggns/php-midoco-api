<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitInfoRequest StructType
 * @subpackage Structs
 */
class SaveDebitInfoRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $documentId;
    /**
     * The internalVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $internalVersion;
    /**
     * The MidocoDebitInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType $MidocoDebitInfo = null;
    /**
     * Constructor method for SaveDebitInfoRequest
     * @uses SaveDebitInfoRequest::setDocumentId()
     * @uses SaveDebitInfoRequest::setInternalVersion()
     * @uses SaveDebitInfoRequest::setMidocoDebitInfo()
     * @param int $documentId
     * @param int $internalVersion
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType $midocoDebitInfo
     */
    public function __construct(int $documentId, int $internalVersion, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType $midocoDebitInfo = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setInternalVersion($internalVersion)
            ->setMidocoDebitInfo($midocoDebitInfo);
    }
    /**
     * Get documentId value
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoRequest
     */
    public function setDocumentId(int $documentId): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int
     */
    public function getInternalVersion(): int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoRequest
     */
    public function setInternalVersion(int $internalVersion): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get MidocoDebitInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType|null
     */
    public function getMidocoDebitInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType
    {
        return $this->MidocoDebitInfo;
    }
    /**
     * Set MidocoDebitInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType $midocoDebitInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoRequest
     */
    public function setMidocoDebitInfo(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitInfoType $midocoDebitInfo = null): self
    {
        $this->MidocoDebitInfo = $midocoDebitInfo;
        
        return $this;
    }
}
