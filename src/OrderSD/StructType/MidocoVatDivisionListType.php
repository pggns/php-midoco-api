<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVatDivisionListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoVatDivisionListType extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for MidocoVatDivisionListType
     * @uses MidocoVatDivisionListType::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionListType
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\OrderSD\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
