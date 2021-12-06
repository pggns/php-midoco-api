<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingTextRequest StructType
 * @subpackage Structs
 */
class DeleteBookingTextRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingText
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingText
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO $MidocoBookingText = null;
    /**
     * Constructor method for DeleteBookingTextRequest
     * @uses DeleteBookingTextRequest::setMidocoBookingText()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO $midocoBookingText
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO $midocoBookingText = null)
    {
        $this
            ->setMidocoBookingText($midocoBookingText);
    }
    /**
     * Get MidocoBookingText value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO|null
     */
    public function getMidocoBookingText(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO
    {
        return $this->MidocoBookingText;
    }
    /**
     * Set MidocoBookingText value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO $midocoBookingText
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBookingTextRequest
     */
    public function setMidocoBookingText(?\Pggns\MidocoApi\Api\OrderSD\StructType\BookingTextDTO $midocoBookingText = null): self
    {
        $this->MidocoBookingText = $midocoBookingText;
        
        return $this;
    }
}
