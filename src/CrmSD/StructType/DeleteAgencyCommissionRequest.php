<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAgencyCommissionRequest StructType
 * @subpackage Structs
 */
class DeleteAgencyCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $MidocoAgencyCommission = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteAgencyCommissionRequest
     * @uses DeleteAgencyCommissionRequest::setMidocoAgencyCommission()
     * @uses DeleteAgencyCommissionRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $midocoAgencyCommission
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $midocoAgencyCommission = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO|null
     */
    public function getMidocoAgencyCommission(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * Set MidocoAgencyCommission value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteAgencyCommissionRequest
     */
    public function setMidocoAgencyCommission(?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $midocoAgencyCommission = null): self
    {
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteAgencyCommissionRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
