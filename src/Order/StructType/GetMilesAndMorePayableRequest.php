<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMorePayableRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMilesAndMorePayableRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - documentation: The billing document id.
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for GetMilesAndMorePayableRequest
     * @uses GetMilesAndMorePayableRequest::setDocumentId()
     * @param int $documentId
     */
    public function __construct(?int $documentId = null)
    {
        $this
            ->setDocumentId($documentId);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePayableRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
