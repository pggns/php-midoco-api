<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyNumbersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyNumbersRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * Constructor method for GetAgencyNumbersRequest
     * @uses GetAgencyNumbersRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
