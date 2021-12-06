<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlFeeRequest StructType
 * @subpackage Structs
 */
class SaveCrmMidocoSettlFeeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlFee
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlFee
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO $MidocoCrmMidocoSettlFee = null;
    /**
     * Constructor method for SaveCrmMidocoSettlFeeRequest
     * @uses SaveCrmMidocoSettlFeeRequest::setMidocoCrmMidocoSettlFee()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee = null)
    {
        $this
            ->setMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee);
    }
    /**
     * Get MidocoCrmMidocoSettlFee value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO|null
     */
    public function getMidocoCrmMidocoSettlFee(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO
    {
        return $this->MidocoCrmMidocoSettlFee;
    }
    /**
     * Set MidocoCrmMidocoSettlFee value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCrmMidocoSettlFeeRequest
     */
    public function setMidocoCrmMidocoSettlFee(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee = null): self
    {
        $this->MidocoCrmMidocoSettlFee = $midocoCrmMidocoSettlFee;
        
        return $this;
    }
}
