<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TasklistResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TasklistResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskList
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskList
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskList|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskList $MidocoTaskList = null;
    /**
     * Constructor method for TasklistResponse
     * @uses TasklistResponse::setMidocoTaskList()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskList $midocoTaskList
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskList $midocoTaskList = null)
    {
        $this
            ->setMidocoTaskList($midocoTaskList);
    }
    /**
     * Get MidocoTaskList value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskList|null
     */
    public function getMidocoTaskList(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskList
    {
        return $this->MidocoTaskList;
    }
    /**
     * Set MidocoTaskList value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskList $midocoTaskList
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistResponse
     */
    public function setMidocoTaskList(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskList $midocoTaskList = null): self
    {
        $this->MidocoTaskList = $midocoTaskList;
        
        return $this;
    }
}
