<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrdCriteriaTypeCategoryInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrdCriteriaTypeCategoryInfo extends OrdCritTypeCatDTO
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoOrdCriteriaTypeCategoryInfo
     * @uses MidocoOrdCriteriaTypeCategoryInfo::setDescription()
     * @param string $description
     */
    public function __construct(?string $description = null)
    {
        $this
            ->setDescription($description);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeCategoryInfo
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
}
