<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeReceiptResponse StructType
 * @subpackage Structs
 */
class MakeReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoReceipt
     * Meta information extracted from the WSDL
     * - ref: MidocoReceipt
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt $MidocoReceipt = null;
    /**
     * The printJob
     * @var string|null
     */
    protected ?string $printJob = null;
    /**
     * Constructor method for MakeReceiptResponse
     * @uses MakeReceiptResponse::setMidocoReceipt()
     * @uses MakeReceiptResponse::setPrintJob()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt $midocoReceipt
     * @param string $printJob
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt $midocoReceipt = null, ?string $printJob = null)
    {
        $this
            ->setMidocoReceipt($midocoReceipt)
            ->setPrintJob($printJob);
    }
    /**
     * Get MidocoReceipt value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt|null
     */
    public function getMidocoReceipt(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt
    {
        return $this->MidocoReceipt;
    }
    /**
     * Set MidocoReceipt value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt $midocoReceipt
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeReceiptResponse
     */
    public function setMidocoReceipt(?\Pggns\MidocoApi\Api\Order\StructType\MidocoReceipt $midocoReceipt = null): self
    {
        $this->MidocoReceipt = $midocoReceipt;
        
        return $this;
    }
    /**
     * Get printJob value
     * @return string|null
     */
    public function getPrintJob(): ?string
    {
        return $this->printJob;
    }
    /**
     * Set printJob value
     * @param string $printJob
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeReceiptResponse
     */
    public function setPrintJob(?string $printJob = null): self
    {
        // validation for constraint: string
        if (!is_null($printJob) && !is_string($printJob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printJob, true), gettype($printJob)), __LINE__);
        }
        $this->printJob = $printJob;
        
        return $this;
    }
}
