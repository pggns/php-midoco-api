<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCashBookSignature StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCashBookSignature extends CashBookSignatureDTO
{
    /**
     * The actionRequired
     * @var string|null
     */
    protected ?string $actionRequired = null;
    /**
     * Constructor method for MidocoCashBookSignature
     * @uses MidocoCashBookSignature::setActionRequired()
     * @param string $actionRequired
     */
    public function __construct(?string $actionRequired = null)
    {
        $this
            ->setActionRequired($actionRequired);
    }
    /**
     * Get actionRequired value
     * @return string|null
     */
    public function getActionRequired(): ?string
    {
        return $this->actionRequired;
    }
    /**
     * Set actionRequired value
     * @param string $actionRequired
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCashBookSignature
     */
    public function setActionRequired(?string $actionRequired = null): self
    {
        // validation for constraint: string
        if (!is_null($actionRequired) && !is_string($actionRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionRequired, true), gettype($actionRequired)), __LINE__);
        }
        $this->actionRequired = $actionRequired;
        
        return $this;
    }
}
