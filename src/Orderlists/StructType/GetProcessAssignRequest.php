<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssignCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssignCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria $MidocoProcessAssignCriteria = null;
    /**
     * Constructor method for GetProcessAssignRequest
     * @uses GetProcessAssignRequest::setMidocoProcessAssignCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria = null)
    {
        $this
            ->setMidocoProcessAssignCriteria($midocoProcessAssignCriteria);
    }
    /**
     * Get MidocoProcessAssignCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria|null
     */
    public function getMidocoProcessAssignCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria
    {
        return $this->MidocoProcessAssignCriteria;
    }
    /**
     * Set MidocoProcessAssignCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetProcessAssignRequest
     */
    public function setMidocoProcessAssignCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria = null): self
    {
        $this->MidocoProcessAssignCriteria = $midocoProcessAssignCriteria;
        
        return $this;
    }
}
