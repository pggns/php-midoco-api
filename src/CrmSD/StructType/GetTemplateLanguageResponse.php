<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguageResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplateLanguage --- get a template language having a given id and language
 * @subpackage Structs
 */
class GetTemplateLanguageResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplateLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmTemplateLanguage
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO $MidocoCrmTemplateLanguage = null;
    /**
     * Constructor method for GetTemplateLanguageResponse
     * @uses GetTemplateLanguageResponse::setMidocoCrmTemplateLanguage()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null)
    {
        $this
            ->setMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage);
    }
    /**
     * Get MidocoCrmTemplateLanguage value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO|null
     */
    public function getMidocoCrmTemplateLanguage(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO
    {
        return $this->MidocoCrmTemplateLanguage;
    }
    /**
     * Set MidocoCrmTemplateLanguage value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTemplateLanguageResponse
     */
    public function setMidocoCrmTemplateLanguage(?\Pggns\MidocoApi\CrmSD\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null): self
    {
        $this->MidocoCrmTemplateLanguage = $midocoCrmTemplateLanguage;
        
        return $this;
    }
}
