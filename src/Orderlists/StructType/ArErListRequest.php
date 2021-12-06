<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArErListRequest StructType
 * @subpackage Structs
 */
class ArErListRequest extends AbstractStructBase
{
    /**
     * The MidocoArErListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoArErListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType $MidocoArErListCriteria = null;
    /**
     * Constructor method for ArErListRequest
     * @uses ArErListRequest::setMidocoArErListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria = null)
    {
        $this
            ->setMidocoArErListCriteria($midocoArErListCriteria);
    }
    /**
     * Get MidocoArErListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    public function getMidocoArErListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType
    {
        return $this->MidocoArErListCriteria;
    }
    /**
     * Set MidocoArErListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListRequest
     */
    public function setMidocoArErListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria = null): self
    {
        $this->MidocoArErListCriteria = $midocoArErListCriteria;
        
        return $this;
    }
}
