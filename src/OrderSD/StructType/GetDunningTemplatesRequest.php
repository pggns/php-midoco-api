<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplatesRequest StructType
 * @subpackage Structs
 */
class GetDunningTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for GetDunningTemplatesRequest
     * @uses GetDunningTemplatesRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDunningTemplatesRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}