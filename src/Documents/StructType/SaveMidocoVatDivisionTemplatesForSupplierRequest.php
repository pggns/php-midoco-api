<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoVatDivisionTemplatesForSupplierRequest
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoVatDivisionTemplatesForSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $MidocoVatDivisionTemplate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SaveMidocoVatDivisionTemplatesForSupplierRequest
     * @uses SaveMidocoVatDivisionTemplatesForSupplierRequest::setMidocoVatDivisionTemplate()
     * @uses SaveMidocoVatDivisionTemplatesForSupplierRequest::setSupplierId()
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     * @param string $supplierId
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null, ?string $supplierId = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate)
            ->setSupplierId($supplierId);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoVatDivisionTemplatesForSupplierRequest
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoVatDivisionTemplatesForSupplierRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
