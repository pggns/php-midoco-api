<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTypeValuesAndDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTypeValuesAndDescriptionsRequest extends AbstractStructBase
{
    /**
     * The culture
     * @var string|null
     */
    protected ?string $culture = null;
    /**
     * Constructor method for GetTypeValuesAndDescriptionsRequest
     * @uses GetTypeValuesAndDescriptionsRequest::setCulture()
     * @param string $culture
     */
    public function __construct(?string $culture = null)
    {
        $this
            ->setCulture($culture);
    }
    /**
     * Get culture value
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->culture;
    }
    /**
     * Set culture value
     * @param string $culture
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTypeValuesAndDescriptionsRequest
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->culture = $culture;
        
        return $this;
    }
}
