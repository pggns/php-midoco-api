<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmExternalOfferRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmExternalOfferRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmExternalOffer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmExternalOffer
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $MidocoCrmExternalOffer = null;
    /**
     * Constructor method for SaveCrmExternalOfferRequest
     * @uses SaveCrmExternalOfferRequest::setMidocoCrmExternalOffer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer = null)
    {
        $this
            ->setMidocoCrmExternalOffer($midocoCrmExternalOffer);
    }
    /**
     * Get MidocoCrmExternalOffer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer|null
     */
    public function getMidocoCrmExternalOffer(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer
    {
        return $this->MidocoCrmExternalOffer;
    }
    /**
     * Set MidocoCrmExternalOffer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmExternalOfferRequest
     */
    public function setMidocoCrmExternalOffer(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer = null): self
    {
        $this->MidocoCrmExternalOffer = $midocoCrmExternalOffer;
        
        return $this;
    }
}
