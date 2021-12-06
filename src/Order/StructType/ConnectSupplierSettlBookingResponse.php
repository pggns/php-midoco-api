<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectSupplierSettlBookingResponse StructType
 * @subpackage Structs
 */
class ConnectSupplierSettlBookingResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $MidocoSupplierAgencySettlementBooking = null;
    /**
     * Constructor method for ConnectSupplierSettlBookingResponse
     * @uses ConnectSupplierSettlBookingResponse::setMidocoSupplierAgencySettlementBooking()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\ConnectSupplierSettlBookingResponse
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
}
