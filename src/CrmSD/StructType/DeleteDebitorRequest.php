<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDebitorRequest StructType
 * @subpackage Structs
 */
class DeleteDebitorRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for DeleteDebitorRequest
     * @uses DeleteDebitorRequest::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteDebitorRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Api\CrmSD\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
