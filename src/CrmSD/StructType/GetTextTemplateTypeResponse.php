<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO $MidocoTextTemplateTypeExt = null;
    /**
     * Constructor method for GetTextTemplateTypeResponse
     * @uses GetTextTemplateTypeResponse::setMidocoTextTemplateTypeExt()
     * @param \Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt = null)
    {
        $this
            ->setMidocoTextTemplateTypeExt($midocoTextTemplateTypeExt);
    }
    /**
     * Get MidocoTextTemplateTypeExt value
     * @return \Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO|null
     */
    public function getMidocoTextTemplateTypeExt(): ?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO
    {
        return $this->MidocoTextTemplateTypeExt;
    }
    /**
     * Set MidocoTextTemplateTypeExt value
     * @param \Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTextTemplateTypeResponse
     */
    public function setMidocoTextTemplateTypeExt(?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateTypeExtDTO $midocoTextTemplateTypeExt = null): self
    {
        $this->MidocoTextTemplateTypeExt = $midocoTextTemplateTypeExt;
        
        return $this;
    }
}
