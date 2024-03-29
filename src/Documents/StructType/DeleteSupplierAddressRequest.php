<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * Constructor method for DeleteSupplierAddressRequest
     * @uses DeleteSupplierAddressRequest::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress $midocoSupplierAddress
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSupplierAddressRequest
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
}
