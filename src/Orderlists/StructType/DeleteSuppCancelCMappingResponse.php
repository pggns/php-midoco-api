<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSuppCancelCMappingResponse StructType
 * @subpackage Structs
 */
class DeleteSuppCancelCMappingResponse extends AbstractStructBase
{
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for DeleteSuppCancelCMappingResponse
     * @uses DeleteSuppCancelCMappingResponse::setMessage()
     * @param string $message
     */
    public function __construct(?string $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteSuppCancelCMappingResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
