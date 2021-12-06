<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEmailReachabilityRequest StructType
 * @subpackage Structs
 */
class CheckEmailReachabilityRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * Constructor method for CheckEmailReachabilityRequest
     * @uses CheckEmailReachabilityRequest::setMidocoCrmCampaign()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CheckEmailReachabilityRequest
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
}
