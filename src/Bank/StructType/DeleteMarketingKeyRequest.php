<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMarketingKeyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMarketingKeyRequest extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The marketingKey
     * @var string|null
     */
    protected ?string $marketingKey = null;
    /**
     * Constructor method for DeleteMarketingKeyRequest
     * @uses DeleteMarketingKeyRequest::setType()
     * @uses DeleteMarketingKeyRequest::setMarketingKey()
     * @param string $type
     * @param string $marketingKey
     */
    public function __construct(?string $type = null, ?string $marketingKey = null)
    {
        $this
            ->setType($type)
            ->setMarketingKey($marketingKey);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteMarketingKeyRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get marketingKey value
     * @return string|null
     */
    public function getMarketingKey(): ?string
    {
        return $this->marketingKey;
    }
    /**
     * Set marketingKey value
     * @param string $marketingKey
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteMarketingKeyRequest
     */
    public function setMarketingKey(?string $marketingKey = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingKey) && !is_string($marketingKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingKey, true), gettype($marketingKey)), __LINE__);
        }
        $this->marketingKey = $marketingKey;
        
        return $this;
    }
}
