<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCommissionByLevelIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierCommissionByLevelIdResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierCommission
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO $MidocoSupplierCommission = null;
    /**
     * Constructor method for GetSupplierCommissionByLevelIdResponse
     * @uses GetSupplierCommissionByLevelIdResponse::setMidocoSupplierCommission()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO $midocoSupplierCommission
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO $midocoSupplierCommission = null)
    {
        $this
            ->setMidocoSupplierCommission($midocoSupplierCommission);
    }
    /**
     * Get MidocoSupplierCommission value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO|null
     */
    public function getMidocoSupplierCommission(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO
    {
        return $this->MidocoSupplierCommission;
    }
    /**
     * Set MidocoSupplierCommission value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO $midocoSupplierCommission
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdResponse
     */
    public function setMidocoSupplierCommission(?\Pggns\MidocoApi\OrderSD\StructType\SupplierCommissionDTO $midocoSupplierCommission = null): self
    {
        $this->MidocoSupplierCommission = $midocoSupplierCommission;
        
        return $this;
    }
}
