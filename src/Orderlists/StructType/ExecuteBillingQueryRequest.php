<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBillingQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteBillingQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteBillingQueryRequest
     * @uses ExecuteBillingQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ExecuteBillingQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
