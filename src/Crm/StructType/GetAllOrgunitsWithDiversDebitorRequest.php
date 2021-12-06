<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllOrgunitsWithDiversDebitorRequest StructType
 * @subpackage Structs
 */
class GetAllOrgunitsWithDiversDebitorRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for GetAllOrgunitsWithDiversDebitorRequest
     * @uses GetAllOrgunitsWithDiversDebitorRequest::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetAllOrgunitsWithDiversDebitorRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
