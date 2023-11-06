<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentNatureDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureDescription
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType $MidocoDocumentNatureDescription = null;
    /**
     * Constructor method for GetDocumentNatureDescriptionsRequest
     * @uses GetDocumentNatureDescriptionsRequest::setMidocoDocumentNatureDescription()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null)
    {
        $this
            ->setMidocoDocumentNatureDescription($midocoDocumentNatureDescription);
    }
    /**
     * Get MidocoDocumentNatureDescription value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType|null
     */
    public function getMidocoDocumentNatureDescription(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType
    {
        return $this->MidocoDocumentNatureDescription;
    }
    /**
     * Set MidocoDocumentNatureDescription value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     * @return \Pggns\MidocoApi\Bank\StructType\GetDocumentNatureDescriptionsRequest
     */
    public function setMidocoDocumentNatureDescription(?\Pggns\MidocoApi\Bank\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null): self
    {
        $this->MidocoDocumentNatureDescription = $midocoDocumentNatureDescription;
        
        return $this;
    }
}
