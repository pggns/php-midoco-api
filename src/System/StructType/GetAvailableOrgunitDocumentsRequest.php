<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrgunitDocumentsRequest StructType
 * @subpackage Structs
 */
class GetAvailableOrgunitDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitDocument
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument $MidocoOrgunitDocument = null;
    /**
     * Constructor method for GetAvailableOrgunitDocumentsRequest
     * @uses GetAvailableOrgunitDocumentsRequest::setMidocoOrgunitDocument()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null)
    {
        $this
            ->setMidocoOrgunitDocument($midocoOrgunitDocument);
    }
    /**
     * Get MidocoOrgunitDocument value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument|null
     */
    public function getMidocoOrgunitDocument(): ?\Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument
    {
        return $this->MidocoOrgunitDocument;
    }
    /**
     * Set MidocoOrgunitDocument value
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     * @return \Pggns\MidocoApi\Api\System\StructType\GetAvailableOrgunitDocumentsRequest
     */
    public function setMidocoOrgunitDocument(?\Pggns\MidocoApi\Api\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null): self
    {
        $this->MidocoOrgunitDocument = $midocoOrgunitDocument;
        
        return $this;
    }
}