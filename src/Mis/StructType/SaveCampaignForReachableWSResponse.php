<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCampaignForReachableWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCampaignForReachableWS --- saves the campaign, but includes only the customers that does not have the mailing_prohibited field set to TRUE
 * @subpackage Structs
 */
class SaveCampaignForReachableWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignWS
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignWS
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $MidocoMisCampaignWS = null;
    /**
     * Constructor method for SaveCampaignForReachableWSResponse
     * @uses SaveCampaignForReachableWSResponse::setMidocoMisCampaignWS()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null)
    {
        $this
            ->setMidocoMisCampaignWS($midocoMisCampaignWS);
    }
    /**
     * Get MidocoMisCampaignWS value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType|null
     */
    public function getMidocoMisCampaignWS(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType
    {
        return $this->MidocoMisCampaignWS;
    }
    /**
     * Set MidocoMisCampaignWS value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveCampaignForReachableWSResponse
     */
    public function setMidocoMisCampaignWS(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null): self
    {
        $this->MidocoMisCampaignWS = $midocoMisCampaignWS;
        
        return $this;
    }
}
