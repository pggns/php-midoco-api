<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCrmCustomerPaymentResponse StructType
 * @subpackage Structs
 */
class GetMidocoCrmCustomerPaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * Constructor method for GetMidocoCrmCustomerPaymentResponse
     * @uses GetMidocoCrmCustomerPaymentResponse::setMidocoCrmCustomerPayment()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null)
    {
        $this
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment);
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoCrmCustomerPaymentResponse
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
}
