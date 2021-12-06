<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierPaymentConditionRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition $MidocoSupplierPaymentCondition = null;
    /**
     * Constructor method for DeleteSupplierPaymentConditionRequest
     * @uses DeleteSupplierPaymentConditionRequest::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition|null
     */
    public function getMidocoSupplierPaymentCondition(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteSupplierPaymentConditionRequest
     */
    public function setMidocoSupplierPaymentCondition(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null): self
    {
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
}
