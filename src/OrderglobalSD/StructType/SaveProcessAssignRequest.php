<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProcessAssignRequest StructType
 * @subpackage Structs
 */
class SaveProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for SaveProcessAssignRequest
     * @uses SaveProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
