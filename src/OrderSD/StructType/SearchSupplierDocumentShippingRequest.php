<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierDocumentShippingRequest StructType
 * @subpackage Structs
 */
class SearchSupplierDocumentShippingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocumentShipping
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping $MidocoSupplierDocumentShipping = null;
    /**
     * Constructor method for SearchSupplierDocumentShippingRequest
     * @uses SearchSupplierDocumentShippingRequest::setMidocoSupplierDocumentShipping()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null)
    {
        $this
            ->setMidocoSupplierDocumentShipping($midocoSupplierDocumentShipping);
    }
    /**
     * Get MidocoSupplierDocumentShipping value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping|null
     */
    public function getMidocoSupplierDocumentShipping(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping
    {
        return $this->MidocoSupplierDocumentShipping;
    }
    /**
     * Set MidocoSupplierDocumentShipping value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierDocumentShippingRequest
     */
    public function setMidocoSupplierDocumentShipping(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null): self
    {
        $this->MidocoSupplierDocumentShipping = $midocoSupplierDocumentShipping;
        
        return $this;
    }
}
