<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCabinClassRequest StructType
 * @subpackage Structs
 */
class SaveCabinClassRequest extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for SaveCabinClassRequest
     * @uses SaveCabinClassRequest::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveCabinClassRequest
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
