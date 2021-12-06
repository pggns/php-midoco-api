<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateHTLMForCrossSellCarResponse StructType
 * @subpackage Structs
 */
class GenerateHTLMForCrossSellCarResponse extends AbstractStructBase
{
    /**
     * The htmlString
     * @var string|null
     */
    protected ?string $htmlString = null;
    /**
     * Constructor method for GenerateHTLMForCrossSellCarResponse
     * @uses GenerateHTLMForCrossSellCarResponse::setHtmlString()
     * @param string $htmlString
     */
    public function __construct(?string $htmlString = null)
    {
        $this
            ->setHtmlString($htmlString);
    }
    /**
     * Get htmlString value
     * @return string|null
     */
    public function getHtmlString(): ?string
    {
        return $this->htmlString;
    }
    /**
     * Set htmlString value
     * @param string $htmlString
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateHTLMForCrossSellCarResponse
     */
    public function setHtmlString(?string $htmlString = null): self
    {
        // validation for constraint: string
        if (!is_null($htmlString) && !is_string($htmlString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlString, true), gettype($htmlString)), __LINE__);
        }
        $this->htmlString = $htmlString;
        
        return $this;
    }
}
