<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRemarkSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRemarkSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $MidocoRemarkSupplier = null;
    /**
     * The lastSupplier
     * @var string|null
     */
    protected ?string $lastSupplier = null;
    /**
     * Constructor method for SaveRemarkSupplierRequest
     * @uses SaveRemarkSupplierRequest::setMidocoRemarkSupplier()
     * @uses SaveRemarkSupplierRequest::setLastSupplier()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @param string $lastSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null, ?string $lastSupplier = null)
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier)
            ->setLastSupplier($lastSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier|null
     */
    public function getMidocoRemarkSupplier(): ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\SaveRemarkSupplierRequest
     */
    public function setMidocoRemarkSupplier(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null): self
    {
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
    /**
     * Get lastSupplier value
     * @return string|null
     */
    public function getLastSupplier(): ?string
    {
        return $this->lastSupplier;
    }
    /**
     * Set lastSupplier value
     * @param string $lastSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\SaveRemarkSupplierRequest
     */
    public function setLastSupplier(?string $lastSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($lastSupplier) && !is_string($lastSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastSupplier, true), gettype($lastSupplier)), __LINE__);
        }
        $this->lastSupplier = $lastSupplier;
        
        return $this;
    }
}
