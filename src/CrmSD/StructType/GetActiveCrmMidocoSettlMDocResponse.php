<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActiveCrmMidocoSettlMDocResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getActiveCrmMidocoSettlMDoc --- returns the active Midoco settlement MDoc defined for the given customer
 * @subpackage Structs
 */
class GetActiveCrmMidocoSettlMDocResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdoc
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlMdoc
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $MidocoCrmMidocoSettlMdoc = null;
    /**
     * Constructor method for GetActiveCrmMidocoSettlMDocResponse
     * @uses GetActiveCrmMidocoSettlMDocResponse::setMidocoCrmMidocoSettlMdoc()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdoc($midocoCrmMidocoSettlMdoc);
    }
    /**
     * Get MidocoCrmMidocoSettlMdoc value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    public function getMidocoCrmMidocoSettlMdoc(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc
    {
        return $this->MidocoCrmMidocoSettlMdoc;
    }
    /**
     * Set MidocoCrmMidocoSettlMdoc value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetActiveCrmMidocoSettlMDocResponse
     */
    public function setMidocoCrmMidocoSettlMdoc(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null): self
    {
        $this->MidocoCrmMidocoSettlMdoc = $midocoCrmMidocoSettlMdoc;
        
        return $this;
    }
}