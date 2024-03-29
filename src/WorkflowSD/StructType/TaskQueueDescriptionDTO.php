<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskQueueDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskQueueDescriptionDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The taskQueueName
     * @var string|null
     */
    protected ?string $taskQueueName = null;
    /**
     * Constructor method for TaskQueueDescriptionDTO
     * @uses TaskQueueDescriptionDTO::setDescription()
     * @uses TaskQueueDescriptionDTO::setLocale()
     * @uses TaskQueueDescriptionDTO::setTaskQueueName()
     * @param string $description
     * @param string $locale
     * @param string $taskQueueName
     */
    public function __construct(?string $description = null, ?string $locale = null, ?string $taskQueueName = null)
    {
        $this
            ->setDescription($description)
            ->setLocale($locale)
            ->setTaskQueueName($taskQueueName);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get taskQueueName value
     * @return string|null
     */
    public function getTaskQueueName(): ?string
    {
        return $this->taskQueueName;
    }
    /**
     * Set taskQueueName value
     * @param string $taskQueueName
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO
     */
    public function setTaskQueueName(?string $taskQueueName = null): self
    {
        // validation for constraint: string
        if (!is_null($taskQueueName) && !is_string($taskQueueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskQueueName, true), gettype($taskQueueName)), __LINE__);
        }
        $this->taskQueueName = $taskQueueName;
        
        return $this;
    }
}
