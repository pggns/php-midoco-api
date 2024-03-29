<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCCAccessList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCCAccessList extends MidocoCCAccessListType
{
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * Constructor method for MidocoCCAccessList
     * @uses MidocoCCAccessList::setUserName()
     * @param string $userName
     */
    public function __construct(?string $userName = null)
    {
        $this
            ->setUserName($userName);
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessList
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
}
