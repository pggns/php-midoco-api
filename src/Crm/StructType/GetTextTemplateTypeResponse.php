<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextTemplateTypeResponse StructType
 * @subpackage Structs
 */
class GetTextTemplateTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateTypeExt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTextTemplateTypeExt
     * @var \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO $MidocoTextTemplateTypeExt = null;
    /**
     * Constructor method for GetTextTemplateTypeResponse
     * @uses GetTextTemplateTypeResponse::setMidocoTextTemplateTypeExt()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt = null)
    {
        $this
            ->setMidocoTextTemplateTypeExt($midocoTextTemplateTypeExt);
    }
    /**
     * Get MidocoTextTemplateTypeExt value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO|null
     */
    public function getMidocoTextTemplateTypeExt(): ?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO
    {
        return $this->MidocoTextTemplateTypeExt;
    }
    /**
     * Set MidocoTextTemplateTypeExt value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTextTemplateTypeResponse
     */
    public function setMidocoTextTemplateTypeExt(?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt = null): self
    {
        $this->MidocoTextTemplateTypeExt = $midocoTextTemplateTypeExt;
        
        return $this;
    }
}
