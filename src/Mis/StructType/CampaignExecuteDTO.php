<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignExecuteDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CampaignExecuteDTO extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * The MidocoCampaignTemplateId
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignTemplateId
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $MidocoCampaignTemplateId = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * Constructor method for CampaignExecuteDTO
     * @uses CampaignExecuteDTO::setMidocoCrmCampaign()
     * @uses CampaignExecuteDTO::setMidocoCampaignTemplateId()
     * @uses CampaignExecuteDTO::setStartTime()
     * @uses CampaignExecuteDTO::setAction()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId
     * @param string $startTime
     * @param string $action
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null, ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId = null, ?string $startTime = null, ?string $action = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setMidocoCampaignTemplateId($midocoCampaignTemplateId)
            ->setStartTime($startTime)
            ->setAction($action);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
    /**
     * Get MidocoCampaignTemplateId value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO|null
     */
    public function getMidocoCampaignTemplateId(): ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO
    {
        return $this->MidocoCampaignTemplateId;
    }
    /**
     * Set MidocoCampaignTemplateId value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO
     */
    public function setMidocoCampaignTemplateId(?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId = null): self
    {
        $this->MidocoCampaignTemplateId = $midocoCampaignTemplateId;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
}
