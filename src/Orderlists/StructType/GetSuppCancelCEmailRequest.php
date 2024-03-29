<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuppCancelCEmailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSuppCancelCEmailRequest extends AbstractStructBase
{
    /**
     * The suppCancelCEmailId
     * @var int|null
     */
    protected ?int $suppCancelCEmailId = null;
    /**
     * Constructor method for GetSuppCancelCEmailRequest
     * @uses GetSuppCancelCEmailRequest::setSuppCancelCEmailId()
     * @param int $suppCancelCEmailId
     */
    public function __construct(?int $suppCancelCEmailId = null)
    {
        $this
            ->setSuppCancelCEmailId($suppCancelCEmailId);
    }
    /**
     * Get suppCancelCEmailId value
     * @return int|null
     */
    public function getSuppCancelCEmailId(): ?int
    {
        return $this->suppCancelCEmailId;
    }
    /**
     * Set suppCancelCEmailId value
     * @param int $suppCancelCEmailId
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSuppCancelCEmailRequest
     */
    public function setSuppCancelCEmailId(?int $suppCancelCEmailId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppCancelCEmailId) && !(is_int($suppCancelCEmailId) || ctype_digit($suppCancelCEmailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppCancelCEmailId, true), gettype($suppCancelCEmailId)), __LINE__);
        }
        $this->suppCancelCEmailId = $suppCancelCEmailId;
        
        return $this;
    }
}
