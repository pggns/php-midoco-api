<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocOrgUnitRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSettlMDocOrgUnitRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoMdocOUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoMdocOUnit
     * @var \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $MidocoAssignedMidocoMdocOUnit = null;
    /**
     * Constructor method for SaveMidocoSettlMDocOrgUnitRequest
     * @uses SaveMidocoSettlMDocOrgUnitRequest::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    public function getMidocoAssignedMidocoMdocOUnit(): ?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoSettlMDocOrgUnitRequest
     */
    public function setMidocoAssignedMidocoMdocOUnit(?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null): self
    {
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
}
