<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDocumentsRequest StructType
 * @subpackage Structs
 */
class GetSupplierDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument $MidocoSupplierDocument = null;
    /**
     * Constructor method for GetSupplierDocumentsRequest
     * @uses GetSupplierDocumentsRequest::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument $midocoSupplierDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument $midocoSupplierDocument = null)
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument|null
     */
    public function getMidocoSupplierDocument(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * Set MidocoSupplierDocument value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument $midocoSupplierDocument
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSupplierDocumentsRequest
     */
    public function setMidocoSupplierDocument(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocument $midocoSupplierDocument = null): self
    {
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
}
