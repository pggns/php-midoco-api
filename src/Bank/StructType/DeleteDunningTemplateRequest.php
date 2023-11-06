<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDunningTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for DeleteDunningTemplateRequest
     * @uses DeleteDunningTemplateRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteDunningTemplateRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Bank\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}
