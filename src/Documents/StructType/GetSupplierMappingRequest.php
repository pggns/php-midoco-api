<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierMappingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $MidocoSupplierMapping = null;
    /**
     * The isShowHierarchical
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isShowHierarchical = null;
    /**
     * Constructor method for GetSupplierMappingRequest
     * @uses GetSupplierMappingRequest::setMidocoSupplierMapping()
     * @uses GetSupplierMappingRequest::setIsShowHierarchical()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @param bool $isShowHierarchical
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping = null, ?bool $isShowHierarchical = null)
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping)
            ->setIsShowHierarchical($isShowHierarchical);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping|null
     */
    public function getMidocoSupplierMapping(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * Set MidocoSupplierMapping value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @return \Pggns\MidocoApi\Documents\StructType\GetSupplierMappingRequest
     */
    public function setMidocoSupplierMapping(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping = null): self
    {
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
    /**
     * Get isShowHierarchical value
     * @return bool|null
     */
    public function getIsShowHierarchical(): ?bool
    {
        return $this->isShowHierarchical;
    }
    /**
     * Set isShowHierarchical value
     * @param bool $isShowHierarchical
     * @return \Pggns\MidocoApi\Documents\StructType\GetSupplierMappingRequest
     */
    public function setIsShowHierarchical(?bool $isShowHierarchical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowHierarchical) && !is_bool($isShowHierarchical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowHierarchical, true), gettype($isShowHierarchical)), __LINE__);
        }
        $this->isShowHierarchical = $isShowHierarchical;
        
        return $this;
    }
}
