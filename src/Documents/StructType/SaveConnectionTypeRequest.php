<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConnectionTypeRequest StructType
 * @subpackage Structs
 */
class SaveConnectionTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for SaveConnectionTypeRequest
     * @uses SaveConnectionTypeRequest::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveConnectionTypeRequest
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\Api\Documents\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}
