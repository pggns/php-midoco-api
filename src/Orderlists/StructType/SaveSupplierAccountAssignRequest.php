<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
class SaveSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for SaveSupplierAccountAssignRequest
     * @uses SaveSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
}