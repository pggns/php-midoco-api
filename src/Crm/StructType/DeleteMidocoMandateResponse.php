<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoMandateResponse extends AbstractStructBase
{
    /**
     * The mandateId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * Constructor method for DeleteMidocoMandateResponse
     * @uses DeleteMidocoMandateResponse::setMandateId()
     * @param int $mandateId
     */
    public function __construct(?int $mandateId = null)
    {
        $this
            ->setMandateId($mandateId);
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateResponse
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
}
