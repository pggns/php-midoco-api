<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAddressTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAddressTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoAddressType
     * Meta information extracted from the WSDL
     * - ref: MidocoAddressType
     * @var \Pggns\MidocoApi\Crm\StructType\AddressTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AddressTypeDTO $MidocoAddressType = null;
    /**
     * Constructor method for CreateAddressTypeResponse
     * @uses CreateAddressTypeResponse::setMidocoAddressType()
     * @param \Pggns\MidocoApi\Crm\StructType\AddressTypeDTO $midocoAddressType
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AddressTypeDTO $midocoAddressType = null)
    {
        $this
            ->setMidocoAddressType($midocoAddressType);
    }
    /**
     * Get MidocoAddressType value
     * @return \Pggns\MidocoApi\Crm\StructType\AddressTypeDTO|null
     */
    public function getMidocoAddressType(): ?\Pggns\MidocoApi\Crm\StructType\AddressTypeDTO
    {
        return $this->MidocoAddressType;
    }
    /**
     * Set MidocoAddressType value
     * @param \Pggns\MidocoApi\Crm\StructType\AddressTypeDTO $midocoAddressType
     * @return \Pggns\MidocoApi\Crm\StructType\CreateAddressTypeResponse
     */
    public function setMidocoAddressType(?\Pggns\MidocoApi\Crm\StructType\AddressTypeDTO $midocoAddressType = null): self
    {
        $this->MidocoAddressType = $midocoAddressType;
        
        return $this;
    }
}
