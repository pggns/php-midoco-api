<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlLevelResponse StructType
 * @subpackage Structs
 */
class SaveCrmMidocoSettlLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlLevel
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO $MidocoCrmMidocoSettlLevel = null;
    /**
     * Constructor method for SaveCrmMidocoSettlLevelResponse
     * @uses SaveCrmMidocoSettlLevelResponse::setMidocoCrmMidocoSettlLevel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlLevel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO|null
     */
    public function getMidocoCrmMidocoSettlLevel(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO
    {
        return $this->MidocoCrmMidocoSettlLevel;
    }
    /**
     * Set MidocoCrmMidocoSettlLevel value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCrmMidocoSettlLevelResponse
     */
    public function setMidocoCrmMidocoSettlLevel(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null): self
    {
        $this->MidocoCrmMidocoSettlLevel = $midocoCrmMidocoSettlLevel;
        
        return $this;
    }
}