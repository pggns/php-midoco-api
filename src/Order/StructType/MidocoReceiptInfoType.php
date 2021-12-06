<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceiptInfoType StructType
 * @subpackage Structs
 */
class MidocoReceiptInfoType extends AbstractStructBase
{
    /**
     * The MidocoReceiptInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoReceiptInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo $MidocoReceiptInfo = null;
    /**
     * Constructor method for MidocoReceiptInfoType
     * @uses MidocoReceiptInfoType::setMidocoReceiptInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null)
    {
        $this
            ->setMidocoReceiptInfo($midocoReceiptInfo);
    }
    /**
     * Get MidocoReceiptInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo|null
     */
    public function getMidocoReceiptInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo
    {
        return $this->MidocoReceiptInfo;
    }
    /**
     * Set MidocoReceiptInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfoType
     */
    public function setMidocoReceiptInfo(?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null): self
    {
        $this->MidocoReceiptInfo = $midocoReceiptInfo;
        
        return $this;
    }
}
