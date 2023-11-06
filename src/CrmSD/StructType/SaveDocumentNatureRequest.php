<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentNatureRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDocumentNatureRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for SaveDocumentNatureRequest
     * @uses SaveDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
