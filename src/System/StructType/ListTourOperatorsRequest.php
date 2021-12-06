<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorsRequest StructType
 * @subpackage Structs
 */
class ListTourOperatorsRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * Constructor method for ListTourOperatorsRequest
     * @uses ListTourOperatorsRequest::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator $midocoTourOperator
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\Api\System\StructType\ListTourOperatorsRequest
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\Api\System\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
}
