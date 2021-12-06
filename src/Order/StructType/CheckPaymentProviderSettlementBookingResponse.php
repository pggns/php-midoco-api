<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckPaymentProviderSettlementBookingResponse StructType
 * @subpackage Structs
 */
class CheckPaymentProviderSettlementBookingResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProviderSettlBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType $MidocoPaymentProviderSettlBooking = null;
    /**
     * Constructor method for CheckPaymentProviderSettlementBookingResponse
     * @uses CheckPaymentProviderSettlementBookingResponse::setMidocoPaymentProviderSettlBooking()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking = null)
    {
        $this
            ->setMidocoPaymentProviderSettlBooking($midocoPaymentProviderSettlBooking);
    }
    /**
     * Get MidocoPaymentProviderSettlBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    public function getMidocoPaymentProviderSettlBooking(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType
    {
        return $this->MidocoPaymentProviderSettlBooking;
    }
    /**
     * Set MidocoPaymentProviderSettlBooking value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckPaymentProviderSettlementBookingResponse
     */
    public function setMidocoPaymentProviderSettlBooking(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking = null): self
    {
        $this->MidocoPaymentProviderSettlBooking = $midocoPaymentProviderSettlBooking;
        
        return $this;
    }
}
