<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for SearchMediatorTypeRequest
     * @uses SearchMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Documents\StructType\SearchMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}
