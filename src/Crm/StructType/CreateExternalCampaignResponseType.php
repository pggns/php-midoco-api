<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateExternalCampaignResponseType StructType
 * @subpackage Structs
 */
class CreateExternalCampaignResponseType extends ExternalCampaignDTO
{
    /**
     * The CustomerIds
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CustomerIds|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIds $CustomerIds = null;
    /**
     * Constructor method for CreateExternalCampaignResponseType
     * @uses CreateExternalCampaignResponseType::setCustomerIds()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIds $customerIds
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIds $customerIds = null)
    {
        $this
            ->setCustomerIds($customerIds);
    }
    /**
     * Get CustomerIds value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CustomerIds|null
     */
    public function getCustomerIds(): ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIds
    {
        return $this->CustomerIds;
    }
    /**
     * Set CustomerIds value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIds $customerIds
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreateExternalCampaignResponseType
     */
    public function setCustomerIds(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIds $customerIds = null): self
    {
        $this->CustomerIds = $customerIds;
        
        return $this;
    }
}
