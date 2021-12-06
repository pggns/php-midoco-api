<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSupplierCommissionRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoSupplierCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCommission
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO $MidocoSupplierCommission = null;
    /**
     * Constructor method for DeleteMidocoSupplierCommissionRequest
     * @uses DeleteMidocoSupplierCommissionRequest::setMidocoSupplierCommission()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission = null)
    {
        $this
            ->setMidocoSupplierCommission($midocoSupplierCommission);
    }
    /**
     * Get MidocoSupplierCommission value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO|null
     */
    public function getMidocoSupplierCommission(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO
    {
        return $this->MidocoSupplierCommission;
    }
    /**
     * Set MidocoSupplierCommission value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteMidocoSupplierCommissionRequest
     */
    public function setMidocoSupplierCommission(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission = null): self
    {
        $this->MidocoSupplierCommission = $midocoSupplierCommission;
        
        return $this;
    }
}
