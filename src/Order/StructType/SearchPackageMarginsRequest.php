<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPackageMarginsRequest StructType
 * @subpackage Structs
 */
class SearchPackageMarginsRequest extends AbstractStructBase
{
    /**
     * The PackageMarginsSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: PackageMarginsSearchCriteria
     * @var \Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType $PackageMarginsSearchCriteria = null;
    /**
     * Constructor method for SearchPackageMarginsRequest
     * @uses SearchPackageMarginsRequest::setPackageMarginsSearchCriteria()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria = null)
    {
        $this
            ->setPackageMarginsSearchCriteria($packageMarginsSearchCriteria);
    }
    /**
     * Get PackageMarginsSearchCriteria value
     * @return \Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType|null
     */
    public function getPackageMarginsSearchCriteria(): ?\Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType
    {
        return $this->PackageMarginsSearchCriteria;
    }
    /**
     * Set PackageMarginsSearchCriteria value
     * @param \Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchPackageMarginsRequest
     */
    public function setPackageMarginsSearchCriteria(?\Pggns\MidocoApi\Api\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria = null): self
    {
        $this->PackageMarginsSearchCriteria = $packageMarginsSearchCriteria;
        
        return $this;
    }
}
