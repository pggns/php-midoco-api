<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateTypeRequest StructType
 * @subpackage Structs
 */
class SaveMidocoTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplateType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO $MidocoTemplateType = null;
    /**
     * Constructor method for SaveMidocoTemplateTypeRequest
     * @uses SaveMidocoTemplateTypeRequest::setMidocoTemplateType()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO $midocoTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO $midocoTemplateType = null)
    {
        $this
            ->setMidocoTemplateType($midocoTemplateType);
    }
    /**
     * Get MidocoTemplateType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO|null
     */
    public function getMidocoTemplateType(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO
    {
        return $this->MidocoTemplateType;
    }
    /**
     * Set MidocoTemplateType value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO $midocoTemplateType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMidocoTemplateTypeRequest
     */
    public function setMidocoTemplateType(?\Pggns\MidocoApi\Api\Orderlists\StructType\TemplateTypeDTO $midocoTemplateType = null): self
    {
        $this->MidocoTemplateType = $midocoTemplateType;
        
        return $this;
    }
}
