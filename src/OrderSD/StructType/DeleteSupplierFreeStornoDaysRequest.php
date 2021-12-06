<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierFreeStornoDaysRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierFreeStornoDaysRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierFreeStornoDays
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for DeleteSupplierFreeStornoDaysRequest
     * @uses DeleteSupplierFreeStornoDaysRequest::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO|null
     */
    public function getMidocoSupplierFreeStornoDays(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierFreeStornoDaysRequest
     */
    public function setMidocoSupplierFreeStornoDays(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null): self
    {
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
}
