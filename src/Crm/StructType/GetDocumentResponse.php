<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDocument --- returns a document corresponding to a given document id
 * @subpackage Structs
 */
class GetDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * Constructor method for GetDocumentResponse
     * @uses GetDocumentResponse::setMidocoCrmDocument()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentResponse
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
}
