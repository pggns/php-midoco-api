<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoChargeOrgUnitRequest StructType
 * @subpackage Structs
 */
class SaveMidocoChargeOrgUnitRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoChargeOu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoChargeOu
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO $MidocoAssignedMidocoChargeOu = null;
    /**
     * Constructor method for SaveMidocoChargeOrgUnitRequest
     * @uses SaveMidocoChargeOrgUnitRequest::setMidocoAssignedMidocoChargeOu()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu = null)
    {
        $this
            ->setMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu);
    }
    /**
     * Get MidocoAssignedMidocoChargeOu value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO|null
     */
    public function getMidocoAssignedMidocoChargeOu(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO
    {
        return $this->MidocoAssignedMidocoChargeOu;
    }
    /**
     * Set MidocoAssignedMidocoChargeOu value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoChargeOrgUnitRequest
     */
    public function setMidocoAssignedMidocoChargeOu(?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu = null): self
    {
        $this->MidocoAssignedMidocoChargeOu = $midocoAssignedMidocoChargeOu;
        
        return $this;
    }
}
