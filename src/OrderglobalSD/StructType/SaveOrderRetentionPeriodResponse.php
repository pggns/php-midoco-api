<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRetentionPeriodResponse StructType
 * @subpackage Structs
 */
class SaveOrderRetentionPeriodResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for SaveOrderRetentionPeriodResponse
     * @uses SaveOrderRetentionPeriodResponse::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod|null
     */
    public function getMidocoOrderRetentionPeriod(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveOrderRetentionPeriodResponse
     */
    public function setMidocoOrderRetentionPeriod(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
