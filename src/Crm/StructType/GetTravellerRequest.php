<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravellerRequest StructType
 * @subpackage Structs
 */
class GetTravellerRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * Constructor method for GetTravellerRequest
     * @uses GetTravellerRequest::setMidocoCustomerId()
     * @uses GetTravellerRequest::setTravellerId()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param int $travellerId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null, ?int $travellerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setTravellerId($travellerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTravellerRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTravellerRequest
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
}
