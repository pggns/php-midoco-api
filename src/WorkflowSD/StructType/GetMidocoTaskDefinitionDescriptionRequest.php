<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskDefinitionDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTaskDefinitionDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskDefinitonDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskDefinitonDescription
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $MidocoTaskDefinitonDescription = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for GetMidocoTaskDefinitionDescriptionRequest
     * @uses GetMidocoTaskDefinitionDescriptionRequest::setMidocoTaskDefinitonDescription()
     * @uses GetMidocoTaskDefinitionDescriptionRequest::setOrgunit()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $midocoTaskDefinitonDescription
     * @param string $orgunit
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $midocoTaskDefinitonDescription = null, ?string $orgunit = null)
    {
        $this
            ->setMidocoTaskDefinitonDescription($midocoTaskDefinitonDescription)
            ->setOrgunit($orgunit);
    }
    /**
     * Get MidocoTaskDefinitonDescription value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription|null
     */
    public function getMidocoTaskDefinitonDescription(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription
    {
        return $this->MidocoTaskDefinitonDescription;
    }
    /**
     * Set MidocoTaskDefinitonDescription value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $midocoTaskDefinitonDescription
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionRequest
     */
    public function setMidocoTaskDefinitonDescription(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $midocoTaskDefinitonDescription = null): self
    {
        $this->MidocoTaskDefinitonDescription = $midocoTaskDefinitonDescription;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
