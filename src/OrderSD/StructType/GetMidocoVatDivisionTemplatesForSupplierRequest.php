<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoVatDivisionTemplatesForSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoVatDivisionTemplatesForSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for GetMidocoVatDivisionTemplatesForSupplierRequest
     * @uses GetMidocoVatDivisionTemplatesForSupplierRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoVatDivisionTemplatesForSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
