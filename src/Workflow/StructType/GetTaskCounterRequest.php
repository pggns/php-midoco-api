<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskCounterRequest StructType
 * @subpackage Structs
 */
class GetTaskCounterRequest extends AbstractStructBase
{
    /**
     * The TaskOverviewCriteria
     * Meta information extracted from the WSDL
     * - ref: TaskOverviewCriteria
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria $TaskOverviewCriteria = null;
    /**
     * Constructor method for GetTaskCounterRequest
     * @uses GetTaskCounterRequest::setTaskOverviewCriteria()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null)
    {
        $this
            ->setTaskOverviewCriteria($taskOverviewCriteria);
    }
    /**
     * Get TaskOverviewCriteria value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria|null
     */
    public function getTaskOverviewCriteria(): ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria
    {
        return $this->TaskOverviewCriteria;
    }
    /**
     * Set TaskOverviewCriteria value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTaskCounterRequest
     */
    public function setTaskOverviewCriteria(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null): self
    {
        $this->TaskOverviewCriteria = $taskOverviewCriteria;
        
        return $this;
    }
}
