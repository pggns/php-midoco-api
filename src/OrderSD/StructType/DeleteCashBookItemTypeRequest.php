<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCashBookItemTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCashBookItemTypeRequest extends AbstractStructBase
{
    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $typeId;
    /**
     * Constructor method for DeleteCashBookItemTypeRequest
     * @uses DeleteCashBookItemTypeRequest::setTypeId()
     * @param string $typeId
     */
    public function __construct(string $typeId)
    {
        $this
            ->setTypeId($typeId);
    }
    /**
     * Get typeId value
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeRequest
     */
    public function setTypeId(string $typeId): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
