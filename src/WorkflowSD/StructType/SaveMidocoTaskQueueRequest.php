<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTaskQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoTaskQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    protected \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $MidocoTaskQueue;
    /**
     * The isUpdate
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isUpdate;
    /**
     * Constructor method for SaveMidocoTaskQueueRequest
     * @uses SaveMidocoTaskQueueRequest::setMidocoTaskQueue()
     * @uses SaveMidocoTaskQueueRequest::setIsUpdate()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue
     * @param bool $isUpdate
     */
    public function __construct(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue, bool $isUpdate)
    {
        $this
            ->setMidocoTaskQueue($midocoTaskQueue)
            ->setIsUpdate($isUpdate);
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function getMidocoTaskQueue(): \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * Set MidocoTaskQueue value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueRequest
     */
    public function setMidocoTaskQueue(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue): self
    {
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
    /**
     * Get isUpdate value
     * @return bool
     */
    public function getIsUpdate(): bool
    {
        return $this->isUpdate;
    }
    /**
     * Set isUpdate value
     * @param bool $isUpdate
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueRequest
     */
    public function setIsUpdate(bool $isUpdate): self
    {
        // validation for constraint: boolean
        if (!is_null($isUpdate) && !is_bool($isUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUpdate, true), gettype($isUpdate)), __LINE__);
        }
        $this->isUpdate = $isUpdate;
        
        return $this;
    }
}
