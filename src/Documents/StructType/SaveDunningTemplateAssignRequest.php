<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDunningTemplateAssignRequest StructType
 * @subpackage Structs
 */
class SaveDunningTemplateAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for SaveDunningTemplateAssignRequest
     * @uses SaveDunningTemplateAssignRequest::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO|null
     */
    public function getMidocoDunningTemplateAssign(): ?\Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveDunningTemplateAssignRequest
     */
    public function setMidocoDunningTemplateAssign(?\Pggns\MidocoApi\Api\Documents\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null): self
    {
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
}
