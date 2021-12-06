<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCustomerQueryResponse StructType
 * @subpackage Structs
 */
class ExecuteCustomerQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteCustomerQueryResponse
     * @uses ExecuteCustomerQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ExecuteCustomerQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
