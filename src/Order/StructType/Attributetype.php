<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for attributetype StructType
 * @subpackage Structs
 */
class Attributetype extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The content
     * @var string|null
     */
    protected ?string $content = null;
    /**
     * Constructor method for attributetype
     * @uses Attributetype::setId()
     * @uses Attributetype::setCode()
     * @uses Attributetype::setContent()
     * @param string $id
     * @param string $code
     * @param string $content
     */
    public function __construct(?string $id = null, ?string $code = null, ?string $content = null)
    {
        $this
            ->setId($id)
            ->setCode($code)
            ->setContent($content);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Api\Order\StructType\Attributetype
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Api\Order\StructType\Attributetype
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Pggns\MidocoApi\Api\Order\StructType\Attributetype
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
}
