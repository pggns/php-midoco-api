<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionDefinitionLevelsRequest StructType
 * @subpackage Structs
 */
class GetCommissionDefinitionLevelsRequest extends AbstractStructBase
{
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * Constructor method for GetCommissionDefinitionLevelsRequest
     * @uses GetCommissionDefinitionLevelsRequest::setCommissionId()
     * @param int $commissionId
     */
    public function __construct(?int $commissionId = null)
    {
        $this
            ->setCommissionId($commissionId);
    }
    /**
     * Get commissionId value
     * @return int|null
     */
    public function getCommissionId(): ?int
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param int $commissionId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionDefinitionLevelsRequest
     */
    public function setCommissionId(?int $commissionId = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionId) && !(is_int($commissionId) || ctype_digit($commissionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
}
