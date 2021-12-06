<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierShipNameRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierShipNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierShipName
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierShipName
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO $MidocoSupplierShipName = null;
    /**
     * Constructor method for DeleteSupplierShipNameRequest
     * @uses DeleteSupplierShipNameRequest::setMidocoSupplierShipName()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO $midocoSupplierShipName
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO $midocoSupplierShipName = null)
    {
        $this
            ->setMidocoSupplierShipName($midocoSupplierShipName);
    }
    /**
     * Get MidocoSupplierShipName value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO|null
     */
    public function getMidocoSupplierShipName(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO
    {
        return $this->MidocoSupplierShipName;
    }
    /**
     * Set MidocoSupplierShipName value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO $midocoSupplierShipName
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierShipNameRequest
     */
    public function setMidocoSupplierShipName(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierShipNameDTO $midocoSupplierShipName = null): self
    {
        $this->MidocoSupplierShipName = $midocoSupplierShipName;
        
        return $this;
    }
}
