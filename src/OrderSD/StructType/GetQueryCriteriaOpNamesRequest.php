<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryCriteriaOpNamesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetQueryCriteriaOpNamesRequest extends AbstractStructBase
{
    /**
     * The fieldType
     * @var string|null
     */
    protected ?string $fieldType = null;
    /**
     * Constructor method for GetQueryCriteriaOpNamesRequest
     * @uses GetQueryCriteriaOpNamesRequest::setFieldType()
     * @param string $fieldType
     */
    public function __construct(?string $fieldType = null)
    {
        $this
            ->setFieldType($fieldType);
    }
    /**
     * Get fieldType value
     * @return string|null
     */
    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }
    /**
     * Set fieldType value
     * @param string $fieldType
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesRequest
     */
    public function setFieldType(?string $fieldType = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldType) && !is_string($fieldType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldType, true), gettype($fieldType)), __LINE__);
        }
        $this->fieldType = $fieldType;
        
        return $this;
    }
}
