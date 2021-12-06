<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementDiffRequest StructType
 * @subpackage Structs
 */
class SaveSupplierSettlementDiffRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementDiff
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SaveSupplierSettlementDiffRequest
     * @uses SaveSupplierSettlementDiffRequest::setMidocoSupplierSettlementDiff()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null)
    {
        $this
            ->setMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff);
    }
    /**
     * Get MidocoSupplierSettlementDiff value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff|null
     */
    public function getMidocoSupplierSettlementDiff(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff
    {
        return $this->MidocoSupplierSettlementDiff;
    }
    /**
     * Set MidocoSupplierSettlementDiff value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveSupplierSettlementDiffRequest
     */
    public function setMidocoSupplierSettlementDiff(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null): self
    {
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
}
