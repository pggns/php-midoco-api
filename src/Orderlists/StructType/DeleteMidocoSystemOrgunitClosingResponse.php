<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSystemOrgunitClosingResponse StructType
 * @subpackage Structs
 */
class DeleteMidocoSystemOrgunitClosingResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for DeleteMidocoSystemOrgunitClosingResponse
     * @uses DeleteMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Api\Orderlists\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}