<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatDivisionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for DeleteVatDivisionRequest
     * @uses DeleteVatDivisionRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteVatDivisionRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Orderlists\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
