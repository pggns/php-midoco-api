<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParseAmadeusImportStringResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParseAmadeusImportStringResponse extends AbstractStructBase
{
    /**
     * The response
     * @var string|null
     */
    protected ?string $response = null;
    /**
     * Constructor method for ParseAmadeusImportStringResponse
     * @uses ParseAmadeusImportStringResponse::setResponse()
     * @param string $response
     */
    public function __construct(?string $response = null)
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get response value
     * @return string|null
     */
    public function getResponse(): ?string
    {
        return $this->response;
    }
    /**
     * Set response value
     * @param string $response
     * @return \Pggns\MidocoApi\Crmsd\StructType\ParseAmadeusImportStringResponse
     */
    public function setResponse(?string $response = null): self
    {
        // validation for constraint: string
        if (!is_null($response) && !is_string($response)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        $this->response = $response;
        
        return $this;
    }
}
