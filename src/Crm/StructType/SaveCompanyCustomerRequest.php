<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCompanyCustomerRequest StructType
 * @subpackage Structs
 */
class SaveCompanyCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for SaveCompanyCustomerRequest
     * @uses SaveCompanyCustomerRequest::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCompanyCustomerRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}