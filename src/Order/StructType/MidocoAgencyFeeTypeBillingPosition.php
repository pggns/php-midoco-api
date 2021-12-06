<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyFeeTypeBillingPosition StructType
 * @subpackage Structs
 */
class MidocoAgencyFeeTypeBillingPosition extends BillingPositionDTO
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for MidocoAgencyFeeTypeBillingPosition
     * @uses MidocoAgencyFeeTypeBillingPosition::setOrderNo()
     * @param int $orderNo
     */
    public function __construct(?int $orderNo = null)
    {
        $this
            ->setOrderNo($orderNo);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyFeeTypeBillingPosition
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
