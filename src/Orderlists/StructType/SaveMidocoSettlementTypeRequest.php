<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlementTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoSettlementTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSettlementType
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementType
     * @var \Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO $MidocoSettlementType = null;
    /**
     * Constructor method for SaveMidocoSettlementTypeRequest
     * @uses SaveMidocoSettlementTypeRequest::setMidocoSettlementType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO $midocoSettlementType
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO $midocoSettlementType = null)
    {
        $this
            ->setMidocoSettlementType($midocoSettlementType);
    }
    /**
     * Get MidocoSettlementType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO|null
     */
    public function getMidocoSettlementType(): ?\Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO
    {
        return $this->MidocoSettlementType;
    }
    /**
     * Set MidocoSettlementType value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO $midocoSettlementType
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoSettlementTypeRequest
     */
    public function setMidocoSettlementType(?\Pggns\MidocoApi\Orderlists\StructType\SettlementTypeDTO $midocoSettlementType = null): self
    {
        $this->MidocoSettlementType = $midocoSettlementType;
        
        return $this;
    }
}
