<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintDocumentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComplaintDocumentDTO extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The MidocoComplaintId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoComplaintId
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for ComplaintDocumentDTO
     * @uses ComplaintDocumentDTO::setMidocoCrmDocument()
     * @uses ComplaintDocumentDTO::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setMidocoComplaintId($midocoComplaintId);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Orderlists\StructType\ComplaintDocumentDTO
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Orderlists\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
    /**
     * Get MidocoComplaintId value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO|null
     */
    public function getMidocoComplaintId(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO
    {
        return $this->MidocoComplaintId;
    }
    /**
     * Set MidocoComplaintId value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO $midocoComplaintId
     * @return \Pggns\MidocoApi\Orderlists\StructType\ComplaintDocumentDTO
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\Orderlists\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
