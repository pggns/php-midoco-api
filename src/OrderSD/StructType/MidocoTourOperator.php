<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTourOperator StructType
 * @subpackage Structs
 */
class MidocoTourOperator extends TouroperatorDTO
{
    /**
     * The inherited
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * Constructor method for MidocoTourOperator
     * @uses MidocoTourOperator::setInherited()
     * @param bool $inherited
     */
    public function __construct(?bool $inherited = null)
    {
        $this
            ->setInherited($inherited);
    }
    /**
     * Get inherited value
     * @return bool|null
     */
    public function getInherited(): ?bool
    {
        return $this->inherited;
    }
    /**
     * Set inherited value
     * @param bool $inherited
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoTourOperator
     */
    public function setInherited(?bool $inherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inherited) && !is_bool($inherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inherited, true), gettype($inherited)), __LINE__);
        }
        $this->inherited = $inherited;
        
        return $this;
    }
}
