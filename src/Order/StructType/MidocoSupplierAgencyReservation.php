<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierAgencyReservation StructType
 * @subpackage Structs
 */
class MidocoSupplierAgencyReservation extends SupplierAgencyReservDTO
{
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * Constructor method for MidocoSupplierAgencyReservation
     * @uses MidocoSupplierAgencyReservation::setIsInheritance()
     * @param bool $isInheritance
     */
    public function __construct(?bool $isInheritance = null)
    {
        $this
            ->setIsInheritance($isInheritance);
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencyReservation
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
}
