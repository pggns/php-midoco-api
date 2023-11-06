<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierPaymentConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition $MidocoSupplierPaymentCondition = null;
    /**
     * Constructor method for DeleteSupplierPaymentConditionRequest
     * @uses DeleteSupplierPaymentConditionRequest::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition|null
     */
    public function getMidocoSupplierPaymentCondition(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteSupplierPaymentConditionRequest
     */
    public function setMidocoSupplierPaymentCondition(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null): self
    {
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
}
