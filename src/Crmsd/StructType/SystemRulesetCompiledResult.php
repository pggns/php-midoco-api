<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemRulesetCompiledResult StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SystemRulesetCompiledResult extends SystemRulesetDTO
{
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * Constructor method for SystemRulesetCompiledResult
     * @uses SystemRulesetCompiledResult::setErrorText()
     * @param string $errorText
     */
    public function __construct(?string $errorText = null)
    {
        $this
            ->setErrorText($errorText);
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Crmsd\StructType\SystemRulesetCompiledResult
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
}
