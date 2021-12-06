<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessFairplaneFlightDataRequest StructType
 * @subpackage Structs
 */
class ProcessFairplaneFlightDataRequest extends AbstractStructBase
{
    /**
     * The MidocoFairplaneFlightDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFairplaneFlightDetail
     * @var \Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType $MidocoFairplaneFlightDetail = null;
    /**
     * The uploadId
     * @var string|null
     */
    protected ?string $uploadId = null;
    /**
     * Constructor method for ProcessFairplaneFlightDataRequest
     * @uses ProcessFairplaneFlightDataRequest::setMidocoFairplaneFlightDetail()
     * @uses ProcessFairplaneFlightDataRequest::setUploadId()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType $midocoFairplaneFlightDetail
     * @param string $uploadId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType $midocoFairplaneFlightDetail = null, ?string $uploadId = null)
    {
        $this
            ->setMidocoFairplaneFlightDetail($midocoFairplaneFlightDetail)
            ->setUploadId($uploadId);
    }
    /**
     * Get MidocoFairplaneFlightDetail value
     * @return \Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType|null
     */
    public function getMidocoFairplaneFlightDetail(): ?\Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType
    {
        return $this->MidocoFairplaneFlightDetail;
    }
    /**
     * Set MidocoFairplaneFlightDetail value
     * @param \Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType $midocoFairplaneFlightDetail
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataRequest
     */
    public function setMidocoFairplaneFlightDetail(?\Pggns\MidocoApi\Api\Order\StructType\FairplaneFlightDetailType $midocoFairplaneFlightDetail = null): self
    {
        $this->MidocoFairplaneFlightDetail = $midocoFairplaneFlightDetail;
        
        return $this;
    }
    /**
     * Get uploadId value
     * @return string|null
     */
    public function getUploadId(): ?string
    {
        return $this->uploadId;
    }
    /**
     * Set uploadId value
     * @param string $uploadId
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataRequest
     */
    public function setUploadId(?string $uploadId = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadId) && !is_string($uploadId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadId, true), gettype($uploadId)), __LINE__);
        }
        $this->uploadId = $uploadId;
        
        return $this;
    }
}
