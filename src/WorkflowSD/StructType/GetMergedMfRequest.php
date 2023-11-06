<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for GetMergedMfRequest
     * @uses GetMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
