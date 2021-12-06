<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeTypeForOrgunitRequest StructType
 * @subpackage Structs
 */
class DeleteFeeTypeForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit $MidocoFeeTypeOrgUnit = null;
    /**
     * Constructor method for DeleteFeeTypeForOrgunitRequest
     * @uses DeleteFeeTypeForOrgunitRequest::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit|null
     */
    public function getMidocoFeeTypeOrgUnit(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest
     */
    public function setMidocoFeeTypeOrgUnit(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null): self
    {
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
}