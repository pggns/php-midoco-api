<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOrdCriteriaTypeCategoriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListOrdCriteriaTypeCategoriesRequest extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for ListOrdCriteriaTypeCategoriesRequest
     * @uses ListOrdCriteriaTypeCategoriesRequest::setCultureId()
     * @param string $cultureId
     */
    public function __construct(?string $cultureId = null)
    {
        $this
            ->setCultureId($cultureId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Bank\StructType\ListOrdCriteriaTypeCategoriesRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
}
