<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionTemplatesRequest StructType
 * @subpackage Structs
 */
class GetVatDivisionTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for GetVatDivisionTemplatesRequest
     * @uses GetVatDivisionTemplatesRequest::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetVatDivisionTemplatesRequest
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
}
