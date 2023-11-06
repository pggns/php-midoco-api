<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteConnectionTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteConnectionTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for DeleteConnectionTypeRequest
     * @uses DeleteConnectionTypeRequest::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteConnectionTypeRequest
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}
