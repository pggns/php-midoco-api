<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeTypeForOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteFeeTypeForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $MidocoFeeTypeOrgUnit = null;
    /**
     * Constructor method for DeleteFeeTypeForOrgunitRequest
     * @uses DeleteFeeTypeForOrgunitRequest::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit|null
     */
    public function getMidocoFeeTypeOrgUnit(): ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteFeeTypeForOrgunitRequest
     */
    public function setMidocoFeeTypeOrgUnit(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null): self
    {
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
}
