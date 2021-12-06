<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAddressRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * Constructor method for DeleteSupplierAddressRequest
     * @uses DeleteSupplierAddressRequest::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteSupplierAddressRequest
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
}
