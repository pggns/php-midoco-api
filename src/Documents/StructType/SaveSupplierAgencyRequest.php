<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO $MidocoSupplierAgency = null;
    /**
     * Constructor method for SaveSupplierAgencyRequest
     * @uses SaveSupplierAgencyRequest::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO $midocoSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO|null
     */
    public function getMidocoSupplierAgency(): ?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * Set MidocoSupplierAgency value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierAgencyRequest
     */
    public function setMidocoSupplierAgency(?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyDTO $midocoSupplierAgency = null): self
    {
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
}
