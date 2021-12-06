<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorTypeRequest StructType
 * @subpackage Structs
 */
class SearchMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for SearchMediatorTypeRequest
     * @uses SearchMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SearchMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Api\Orderlists\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}
