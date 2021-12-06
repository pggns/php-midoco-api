<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressDTO StructType
 * @subpackage Structs
 */
class SaveAddressDTO extends CrmAddressDTO
{
    /**
     * The makeDefault
     * @var bool|null
     */
    protected ?bool $makeDefault = null;
    /**
     * Constructor method for SaveAddressDTO
     * @uses SaveAddressDTO::setMakeDefault()
     * @param bool $makeDefault
     */
    public function __construct(?bool $makeDefault = null)
    {
        $this
            ->setMakeDefault($makeDefault);
    }
    /**
     * Get makeDefault value
     * @return bool|null
     */
    public function getMakeDefault(): ?bool
    {
        return $this->makeDefault;
    }
    /**
     * Set makeDefault value
     * @param bool $makeDefault
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAddressDTO
     */
    public function setMakeDefault(?bool $makeDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($makeDefault) && !is_bool($makeDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeDefault, true), gettype($makeDefault)), __LINE__);
        }
        $this->makeDefault = $makeDefault;
        
        return $this;
    }
}
