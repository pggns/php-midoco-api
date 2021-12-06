<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteConnectionTypeRequest StructType
 * @subpackage Structs
 */
class DeleteConnectionTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for DeleteConnectionTypeRequest
     * @uses DeleteConnectionTypeRequest::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteConnectionTypeRequest
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\Api\Crm\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}