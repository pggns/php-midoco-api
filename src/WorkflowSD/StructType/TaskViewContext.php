<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewContext StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewContext extends AbstractStructBase
{
    /**
     * The TaskViewContextNew
     * Meta information extracted from the WSDL
     * - ref: TaskViewContextNew
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew $TaskViewContextNew = null;
    /**
     * The TaskViewContextOld
     * Meta information extracted from the WSDL
     * - ref: TaskViewContextOld
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld $TaskViewContextOld = null;
    /**
     * The isFullRefresh
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isFullRefresh = null;
    /**
     * Constructor method for TaskViewContext
     * @uses TaskViewContext::setTaskViewContextNew()
     * @uses TaskViewContext::setTaskViewContextOld()
     * @uses TaskViewContext::setIsFullRefresh()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew $taskViewContextNew
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld $taskViewContextOld
     * @param bool $isFullRefresh
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew $taskViewContextNew = null, ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld $taskViewContextOld = null, ?bool $isFullRefresh = false)
    {
        $this
            ->setTaskViewContextNew($taskViewContextNew)
            ->setTaskViewContextOld($taskViewContextOld)
            ->setIsFullRefresh($isFullRefresh);
    }
    /**
     * Get TaskViewContextNew value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew|null
     */
    public function getTaskViewContextNew(): ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew
    {
        return $this->TaskViewContextNew;
    }
    /**
     * Set TaskViewContextNew value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew $taskViewContextNew
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext
     */
    public function setTaskViewContextNew(?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew $taskViewContextNew = null): self
    {
        $this->TaskViewContextNew = $taskViewContextNew;
        
        return $this;
    }
    /**
     * Get TaskViewContextOld value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld|null
     */
    public function getTaskViewContextOld(): ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld
    {
        return $this->TaskViewContextOld;
    }
    /**
     * Set TaskViewContextOld value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld $taskViewContextOld
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext
     */
    public function setTaskViewContextOld(?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextOld $taskViewContextOld = null): self
    {
        $this->TaskViewContextOld = $taskViewContextOld;
        
        return $this;
    }
    /**
     * Get isFullRefresh value
     * @return bool|null
     */
    public function getIsFullRefresh(): ?bool
    {
        return $this->isFullRefresh;
    }
    /**
     * Set isFullRefresh value
     * @param bool $isFullRefresh
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext
     */
    public function setIsFullRefresh(?bool $isFullRefresh = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isFullRefresh) && !is_bool($isFullRefresh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFullRefresh, true), gettype($isFullRefresh)), __LINE__);
        }
        $this->isFullRefresh = $isFullRefresh;
        
        return $this;
    }
}
