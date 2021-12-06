<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoDestinationKeyAssignRequest StructType
 * @subpackage Structs
 */
class SaveMidocoDestinationKeyAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationKeyAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationKeyAssign
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO $MidocoDestinationKeyAssign = null;
    /**
     * Constructor method for SaveMidocoDestinationKeyAssignRequest
     * @uses SaveMidocoDestinationKeyAssignRequest::setMidocoDestinationKeyAssign()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null)
    {
        $this
            ->setMidocoDestinationKeyAssign($midocoDestinationKeyAssign);
    }
    /**
     * Get MidocoDestinationKeyAssign value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO|null
     */
    public function getMidocoDestinationKeyAssign(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO
    {
        return $this->MidocoDestinationKeyAssign;
    }
    /**
     * Set MidocoDestinationKeyAssign value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMidocoDestinationKeyAssignRequest
     */
    public function setMidocoDestinationKeyAssign(?\Pggns\MidocoApi\Api\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null): self
    {
        $this->MidocoDestinationKeyAssign = $midocoDestinationKeyAssign;
        
        return $this;
    }
}
