<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfLocalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoMfLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoMfLocal
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetMfLocalRequest
     * @uses GetMfLocalRequest::setMidocoMfLocal()
     * @uses GetMfLocalRequest::setUnitName()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal $midocoMfLocal
     * @param string $unitName
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal $midocoMfLocal = null, ?string $unitName = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal)
            ->setUnitName($unitName);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetMfLocalRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
