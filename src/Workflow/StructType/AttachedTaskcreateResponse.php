<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachedTaskcreateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttachedTaskcreateResponse extends AbstractStructBase
{
    /**
     * The MidocoTask
     * Meta information extracted from the WSDL
     * - ref: MidocoTask
     * @var \Pggns\MidocoApi\Workflow\StructType\Task|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\Task $MidocoTask = null;
    /**
     * Constructor method for AttachedTaskcreateResponse
     * @uses AttachedTaskcreateResponse::setMidocoTask()
     * @param \Pggns\MidocoApi\Workflow\StructType\Task $midocoTask
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\Task $midocoTask = null)
    {
        $this
            ->setMidocoTask($midocoTask);
    }
    /**
     * Get MidocoTask value
     * @return \Pggns\MidocoApi\Workflow\StructType\Task|null
     */
    public function getMidocoTask(): ?\Pggns\MidocoApi\Workflow\StructType\Task
    {
        return $this->MidocoTask;
    }
    /**
     * Set MidocoTask value
     * @param \Pggns\MidocoApi\Workflow\StructType\Task $midocoTask
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateResponse
     */
    public function setMidocoTask(?\Pggns\MidocoApi\Workflow\StructType\Task $midocoTask = null): self
    {
        $this->MidocoTask = $midocoTask;
        
        return $this;
    }
}
