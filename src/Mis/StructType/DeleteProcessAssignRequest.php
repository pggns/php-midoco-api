<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProcessAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for DeleteProcessAssignRequest
     * @uses DeleteProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\Mis\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
