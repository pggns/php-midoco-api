<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskList StructType
 * @subpackage Structs
 */
class MidocoTaskList extends AbstractStructBase
{
    /**
     * The MidocoTask
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTask
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\Task[]
     */
    protected ?array $MidocoTask = null;
    /**
     * Constructor method for MidocoTaskList
     * @uses MidocoTaskList::setMidocoTask()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\Task[] $midocoTask
     */
    public function __construct(?array $midocoTask = null)
    {
        $this
            ->setMidocoTask($midocoTask);
    }
    /**
     * Get MidocoTask value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\Task[]
     */
    public function getMidocoTask(): ?array
    {
        return $this->MidocoTask;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTask method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskForArrayConstraintsFromSetMidocoTask(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskListMidocoTaskItem) {
            // validation for constraint: itemType
            if (!$midocoTaskListMidocoTaskItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\Task) {
                $invalidValues[] = is_object($midocoTaskListMidocoTaskItem) ? get_class($midocoTaskListMidocoTaskItem) : sprintf('%s(%s)', gettype($midocoTaskListMidocoTaskItem), var_export($midocoTaskListMidocoTaskItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTask property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\Task, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTask value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\Task[] $midocoTask
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskList
     */
    public function setMidocoTask(?array $midocoTask = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskArrayErrorMessage = self::validateMidocoTaskForArrayConstraintsFromSetMidocoTask($midocoTask))) {
            throw new InvalidArgumentException($midocoTaskArrayErrorMessage, __LINE__);
        }
        $this->MidocoTask = $midocoTask;
        
        return $this;
    }
    /**
     * Add item to MidocoTask value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\Task $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskList
     */
    public function addToMidocoTask(\Pggns\MidocoApi\Api\Workflow\StructType\Task $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\Task) {
            throw new InvalidArgumentException(sprintf('The MidocoTask property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\Task, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTask[] = $item;
        
        return $this;
    }
}
