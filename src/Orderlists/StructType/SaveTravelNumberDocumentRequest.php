<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelNumberDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTravelNumberDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberDocument
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument $MidocoTravelNumberDocument = null;
    /**
     * Constructor method for SaveTravelNumberDocumentRequest
     * @uses SaveTravelNumberDocumentRequest::setMidocoTravelNumberDocument()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null)
    {
        $this
            ->setMidocoTravelNumberDocument($midocoTravelNumberDocument);
    }
    /**
     * Get MidocoTravelNumberDocument value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument|null
     */
    public function getMidocoTravelNumberDocument(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument
    {
        return $this->MidocoTravelNumberDocument;
    }
    /**
     * Set MidocoTravelNumberDocument value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveTravelNumberDocumentRequest
     */
    public function setMidocoTravelNumberDocument(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null): self
    {
        $this->MidocoTravelNumberDocument = $midocoTravelNumberDocument;
        
        return $this;
    }
}
