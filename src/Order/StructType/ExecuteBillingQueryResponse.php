<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBillingQueryResponse StructType
 * @subpackage Structs
 */
class ExecuteBillingQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteBillingQueryResponse
     * @uses ExecuteBillingQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteBillingQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Api\Order\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
