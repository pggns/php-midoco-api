<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDebitCardRequest StructType
 * @subpackage Structs
 */
class DeleteDebitCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteDebitCardRequest
     * @uses DeleteDebitCardRequest::setMidocoCrmDebitCard()
     * @uses DeleteDebitCardRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteDebitCardRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteDebitCardRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
