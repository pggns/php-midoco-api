<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTitle StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTitle extends PersonTitleDTO
{
    /**
     * The inherited
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * Constructor method for MidocoTitle
     * @uses MidocoTitle::setInherited()
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTitle
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
