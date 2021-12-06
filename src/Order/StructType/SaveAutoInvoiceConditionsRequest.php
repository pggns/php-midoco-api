<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoInvoiceConditionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Create or update auto invoice conditions.
 * @subpackage Structs
 */
class SaveAutoInvoiceConditionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO
     */
    protected \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition;
    /**
     * Constructor method for SaveAutoInvoiceConditionsRequest
     * @uses SaveAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(\Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition)
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO
     */
    public function getMidocoAutoInvoiceCondition(): \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(\Pggns\MidocoApi\Api\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
