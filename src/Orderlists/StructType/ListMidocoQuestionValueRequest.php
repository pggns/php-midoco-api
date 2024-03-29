<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoQuestionValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoQuestionValueRequest extends AbstractStructBase
{
    /**
     * The questionId
     * @var int|null
     */
    protected ?int $questionId = null;
    /**
     * Constructor method for ListMidocoQuestionValueRequest
     * @uses ListMidocoQuestionValueRequest::setQuestionId()
     * @param int $questionId
     */
    public function __construct(?int $questionId = null)
    {
        $this
            ->setQuestionId($questionId);
    }
    /**
     * Get questionId value
     * @return int|null
     */
    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }
    /**
     * Set questionId value
     * @param int $questionId
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListMidocoQuestionValueRequest
     */
    public function setQuestionId(?int $questionId = null): self
    {
        // validation for constraint: int
        if (!is_null($questionId) && !(is_int($questionId) || ctype_digit($questionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionId, true), gettype($questionId)), __LINE__);
        }
        $this->questionId = $questionId;
        
        return $this;
    }
}
