<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashBookInfo extends CashBookDTO
{
    /**
     * The MidocoCashBookSignature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCashBookSignature
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature $MidocoCashBookSignature = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * Constructor method for CashBookInfo
     * @uses CashBookInfo::setMidocoCashBookSignature()
     * @uses CashBookInfo::setUserName()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @param string $userName
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature $midocoCashBookSignature = null, ?string $userName = null)
    {
        $this
            ->setMidocoCashBookSignature($midocoCashBookSignature)
            ->setUserName($userName);
    }
    /**
     * Get MidocoCashBookSignature value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature|null
     */
    public function getMidocoCashBookSignature(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature
    {
        return $this->MidocoCashBookSignature;
    }
    /**
     * Set MidocoCashBookSignature value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @return \Pggns\MidocoApi\Orderlists\StructType\CashBookInfo
     */
    public function setMidocoCashBookSignature(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookSignature $midocoCashBookSignature = null): self
    {
        $this->MidocoCashBookSignature = $midocoCashBookSignature;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Orderlists\StructType\CashBookInfo
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
}
