<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCachedDataKeyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCachedDataKeyRequest extends AbstractStructBase
{
    /**
     * The loaderKey
     * @var string|null
     */
    protected ?string $loaderKey = null;
    /**
     * Constructor method for GetMidocoCachedDataKeyRequest
     * @uses GetMidocoCachedDataKeyRequest::setLoaderKey()
     * @param string $loaderKey
     */
    public function __construct(?string $loaderKey = null)
    {
        $this
            ->setLoaderKey($loaderKey);
    }
    /**
     * Get loaderKey value
     * @return string|null
     */
    public function getLoaderKey(): ?string
    {
        return $this->loaderKey;
    }
    /**
     * Set loaderKey value
     * @param string $loaderKey
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoCachedDataKeyRequest
     */
    public function setLoaderKey(?string $loaderKey = null): self
    {
        // validation for constraint: string
        if (!is_null($loaderKey) && !is_string($loaderKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loaderKey, true), gettype($loaderKey)), __LINE__);
        }
        $this->loaderKey = $loaderKey;
        
        return $this;
    }
}
