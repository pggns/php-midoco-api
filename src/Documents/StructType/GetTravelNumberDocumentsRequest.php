<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNumberDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberDocument
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument $MidocoTravelNumberDocument = null;
    /**
     * Constructor method for GetTravelNumberDocumentsRequest
     * @uses GetTravelNumberDocumentsRequest::setMidocoTravelNumberDocument()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null)
    {
        $this
            ->setMidocoTravelNumberDocument($midocoTravelNumberDocument);
    }
    /**
     * Get MidocoTravelNumberDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument|null
     */
    public function getMidocoTravelNumberDocument(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument
    {
        return $this->MidocoTravelNumberDocument;
    }
    /**
     * Set MidocoTravelNumberDocument value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     * @return \Pggns\MidocoApi\Documents\StructType\GetTravelNumberDocumentsRequest
     */
    public function setMidocoTravelNumberDocument(?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null): self
    {
        $this->MidocoTravelNumberDocument = $midocoTravelNumberDocument;
        
        return $this;
    }
}
