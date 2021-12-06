<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCashBookItemTypeResponse StructType
 * @subpackage Structs
 */
class GetCashBookItemTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for GetCashBookItemTypeResponse
     * @uses GetCashBookItemTypeResponse::setMidocoCashBookItemType()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null)
    {
        $this
            ->setMidocoCashBookItemType($midocoCashBookItemType);
    }
    /**
     * Get MidocoCashBookItemType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType|null
     */
    public function getMidocoCashBookItemType(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType
    {
        return $this->MidocoCashBookItemType;
    }
    /**
     * Set MidocoCashBookItemType value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetCashBookItemTypeResponse
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
