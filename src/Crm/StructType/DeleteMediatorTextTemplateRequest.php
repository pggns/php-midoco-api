<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMediatorTextTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMediatorTextTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerTextTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerTextTemplate
     * @var \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $MidocoCustomerTextTemplate = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteMediatorTextTemplateRequest
     * @uses DeleteMediatorTextTemplateRequest::setMidocoCustomerTextTemplate()
     * @uses DeleteMediatorTextTemplateRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCustomerTextTemplate($midocoCustomerTextTemplate)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCustomerTextTemplate value
     * @return \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO|null
     */
    public function getMidocoCustomerTextTemplate(): ?\Pggns\MidocoApi\Crm\StructType\TextTemplateDTO
    {
        return $this->MidocoCustomerTextTemplate;
    }
    /**
     * Set MidocoCustomerTextTemplate value
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateRequest
     */
    public function setMidocoCustomerTextTemplate(?\Pggns\MidocoApi\Crm\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null): self
    {
        $this->MidocoCustomerTextTemplate = $midocoCustomerTextTemplate;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
