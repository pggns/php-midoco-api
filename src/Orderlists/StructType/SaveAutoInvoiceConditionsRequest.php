<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoInvoiceConditionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Create or update auto invoice conditions.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAutoInvoiceConditionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO
     */
    protected \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition;
    /**
     * Constructor method for SaveAutoInvoiceConditionsRequest
     * @uses SaveAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(\Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition)
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO
     */
    public function getMidocoAutoInvoiceCondition(): \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(\Pggns\MidocoApi\Orderlists\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
