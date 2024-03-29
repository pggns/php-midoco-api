<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderLayout StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderLayout extends OrderLayoutDTO
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The typeDescription
     * @var string|null
     */
    protected ?string $typeDescription = null;
    /**
     * Constructor method for MidocoOrderLayout
     * @uses MidocoOrderLayout::setMidocoOrder()
     * @uses MidocoOrderLayout::setTypeDescription()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoOrderType $midocoOrder
     * @param string $typeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoOrderType $midocoOrder = null, ?string $typeDescription = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setTypeDescription($typeDescription);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Bank\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderLayout
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Bank\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderLayout
     */
    public function setTypeDescription(?string $typeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        
        return $this;
    }
}
