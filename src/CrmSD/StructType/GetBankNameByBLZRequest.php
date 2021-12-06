<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankNameByBLZRequest StructType
 * @subpackage Structs
 */
class GetBankNameByBLZRequest extends AbstractStructBase
{
    /**
     * The blz
     * @var string|null
     */
    protected ?string $blz = null;
    /**
     * Constructor method for GetBankNameByBLZRequest
     * @uses GetBankNameByBLZRequest::setBlz()
     * @param string $blz
     */
    public function __construct(?string $blz = null)
    {
        $this
            ->setBlz($blz);
    }
    /**
     * Get blz value
     * @return string|null
     */
    public function getBlz(): ?string
    {
        return $this->blz;
    }
    /**
     * Set blz value
     * @param string $blz
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetBankNameByBLZRequest
     */
    public function setBlz(?string $blz = null): self
    {
        // validation for constraint: string
        if (!is_null($blz) && !is_string($blz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blz, true), gettype($blz)), __LINE__);
        }
        $this->blz = $blz;
        
        return $this;
    }
}
