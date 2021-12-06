<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSettlementInfoDetailsRequest StructType
 * @subpackage Structs
 */
class GetSettlementInfoDetailsRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlementId;
    /**
     * Constructor method for GetSettlementInfoDetailsRequest
     * @uses GetSettlementInfoDetailsRequest::setSettlementId()
     * @param int $settlementId
     */
    public function __construct(int $settlementId)
    {
        $this
            ->setSettlementId($settlementId);
    }
    /**
     * Get settlementId value
     * @return int
     */
    public function getSettlementId(): int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSettlementInfoDetailsRequest
     */
    public function setSettlementId(int $settlementId): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
