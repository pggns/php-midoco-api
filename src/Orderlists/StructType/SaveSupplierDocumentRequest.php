<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDocumentRequest StructType
 * @subpackage Structs
 */
class SaveSupplierDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument $MidocoSupplierDocument = null;
    /**
     * Constructor method for SaveSupplierDocumentRequest
     * @uses SaveSupplierDocumentRequest::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument = null)
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument|null
     */
    public function getMidocoSupplierDocument(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * Set MidocoSupplierDocument value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveSupplierDocumentRequest
     */
    public function setMidocoSupplierDocument(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument = null): self
    {
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
}