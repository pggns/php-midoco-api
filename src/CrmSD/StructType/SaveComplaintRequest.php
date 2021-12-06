<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintRequest StructType
 * @subpackage Structs
 */
class SaveComplaintRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaint
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaint
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO $MidocoComplaint = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveComplaintRequest
     * @uses SaveComplaintRequest::setMidocoComplaint()
     * @uses SaveComplaintRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO $midocoComplaint
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO $midocoComplaint = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoComplaint($midocoComplaint)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoComplaint value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO|null
     */
    public function getMidocoComplaint(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO
    {
        return $this->MidocoComplaint;
    }
    /**
     * Set MidocoComplaint value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO $midocoComplaint
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveComplaintRequest
     */
    public function setMidocoComplaint(?\Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintDTO $midocoComplaint = null): self
    {
        $this->MidocoComplaint = $midocoComplaint;
        
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
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveComplaintRequest
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
