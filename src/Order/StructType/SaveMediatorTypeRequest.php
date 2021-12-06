<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorTypeRequest StructType
 * @subpackage Structs
 */
class SaveMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for SaveMediatorTypeRequest
     * @uses SaveMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Api\Order\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}
