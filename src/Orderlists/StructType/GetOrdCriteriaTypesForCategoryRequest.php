<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaTypesForCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdCriteriaTypesForCategoryRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * Constructor method for GetOrdCriteriaTypesForCategoryRequest
     * @uses GetOrdCriteriaTypesForCategoryRequest::setCategoryId()
     * @param int $categoryId
     */
    public function __construct(int $categoryId)
    {
        $this
            ->setCategoryId($categoryId);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdCriteriaTypesForCategoryRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
}
