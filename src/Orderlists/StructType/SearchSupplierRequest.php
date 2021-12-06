<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierRequest StructType
 * @subpackage Structs
 */
class SearchSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierRequest
     * @uses SearchSupplierRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SearchSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
