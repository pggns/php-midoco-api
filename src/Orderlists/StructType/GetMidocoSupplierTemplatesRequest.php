<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierTemplatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTemplate
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO $MidocoSupplierTemplate = null;
    /**
     * Constructor method for GetMidocoSupplierTemplatesRequest
     * @uses GetMidocoSupplierTemplatesRequest::setMidocoSupplierTemplate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null)
    {
        $this
            ->setMidocoSupplierTemplate($midocoSupplierTemplate);
    }
    /**
     * Get MidocoSupplierTemplate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO|null
     */
    public function getMidocoSupplierTemplate(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO
    {
        return $this->MidocoSupplierTemplate;
    }
    /**
     * Set MidocoSupplierTemplate value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoSupplierTemplatesRequest
     */
    public function setMidocoSupplierTemplate(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null): self
    {
        $this->MidocoSupplierTemplate = $midocoSupplierTemplate;
        
        return $this;
    }
}
