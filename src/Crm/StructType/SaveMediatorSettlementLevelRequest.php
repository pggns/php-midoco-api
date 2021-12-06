<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorSettlementLevelRequest StructType
 * @subpackage Structs
 */
class SaveMediatorSettlementLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorSettlementLevel
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO $MidocoMediatorSettlementLevel = null;
    /**
     * Constructor method for SaveMediatorSettlementLevelRequest
     * @uses SaveMediatorSettlementLevelRequest::setMidocoMediatorSettlementLevel()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null)
    {
        $this
            ->setMidocoMediatorSettlementLevel($midocoMediatorSettlementLevel);
    }
    /**
     * Get MidocoMediatorSettlementLevel value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO|null
     */
    public function getMidocoMediatorSettlementLevel(): ?\Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO
    {
        return $this->MidocoMediatorSettlementLevel;
    }
    /**
     * Set MidocoMediatorSettlementLevel value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveMediatorSettlementLevelRequest
     */
    public function setMidocoMediatorSettlementLevel(?\Pggns\MidocoApi\Api\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null): self
    {
        $this->MidocoMediatorSettlementLevel = $midocoMediatorSettlementLevel;
        
        return $this;
    }
}
