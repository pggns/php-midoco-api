<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedMidocoSettlUnitResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetAssignedMidocoSettlUnit --- returns the assigned settlement org units defined for the given customer and org unit
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedMidocoSettlUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoSettlOUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoAssignedMidocoSettlOUnit
     * @var \Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO $MidocoAssignedMidocoSettlOUnit = null;
    /**
     * Constructor method for GetAssignedMidocoSettlUnitResponse
     * @uses GetAssignedMidocoSettlUnitResponse::setMidocoAssignedMidocoSettlOUnit()
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit);
    }
    /**
     * Get MidocoAssignedMidocoSettlOUnit value
     * @return \Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    public function getMidocoAssignedMidocoSettlOUnit(): ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO
    {
        return $this->MidocoAssignedMidocoSettlOUnit;
    }
    /**
     * Set MidocoAssignedMidocoSettlOUnit value
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     * @return \Pggns\MidocoApi\Crm\StructType\GetAssignedMidocoSettlUnitResponse
     */
    public function setMidocoAssignedMidocoSettlOUnit(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null): self
    {
        $this->MidocoAssignedMidocoSettlOUnit = $midocoAssignedMidocoSettlOUnit;
        
        return $this;
    }
}
