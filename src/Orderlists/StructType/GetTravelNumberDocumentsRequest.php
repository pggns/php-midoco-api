<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberDocumentsRequest StructType
 * @subpackage Structs
 */
class GetTravelNumberDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberDocument
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument $MidocoTravelNumberDocument = null;
    /**
     * Constructor method for GetTravelNumberDocumentsRequest
     * @uses GetTravelNumberDocumentsRequest::setMidocoTravelNumberDocument()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null)
    {
        $this
            ->setMidocoTravelNumberDocument($midocoTravelNumberDocument);
    }
    /**
     * Get MidocoTravelNumberDocument value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument|null
     */
    public function getMidocoTravelNumberDocument(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument
    {
        return $this->MidocoTravelNumberDocument;
    }
    /**
     * Set MidocoTravelNumberDocument value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetTravelNumberDocumentsRequest
     */
    public function setMidocoTravelNumberDocument(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null): self
    {
        $this->MidocoTravelNumberDocument = $midocoTravelNumberDocument;
        
        return $this;
    }
}
