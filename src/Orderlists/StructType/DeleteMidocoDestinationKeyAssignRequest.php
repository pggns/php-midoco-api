<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoDestinationKeyAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoDestinationKeyAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationKeyAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationKeyAssign
     * @var \Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO $MidocoDestinationKeyAssign = null;
    /**
     * Constructor method for DeleteMidocoDestinationKeyAssignRequest
     * @uses DeleteMidocoDestinationKeyAssignRequest::setMidocoDestinationKeyAssign()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null)
    {
        $this
            ->setMidocoDestinationKeyAssign($midocoDestinationKeyAssign);
    }
    /**
     * Get MidocoDestinationKeyAssign value
     * @return \Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO|null
     */
    public function getMidocoDestinationKeyAssign(): ?\Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO
    {
        return $this->MidocoDestinationKeyAssign;
    }
    /**
     * Set MidocoDestinationKeyAssign value
     * @param \Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMidocoDestinationKeyAssignRequest
     */
    public function setMidocoDestinationKeyAssign(?\Pggns\MidocoApi\Orderlists\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null): self
    {
        $this->MidocoDestinationKeyAssign = $midocoDestinationKeyAssign;
        
        return $this;
    }
}
