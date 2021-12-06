<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactSourceRequest StructType
 * @subpackage Structs
 */
class DeleteContactSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource $MidocoContactSource = null;
    /**
     * Constructor method for DeleteContactSourceRequest
     * @uses DeleteContactSourceRequest::setMidocoContactSource()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource $midocoContactSource
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource $midocoContactSource = null)
    {
        $this
            ->setMidocoContactSource($midocoContactSource);
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource|null
     */
    public function getMidocoContactSource(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource
    {
        return $this->MidocoContactSource;
    }
    /**
     * Set MidocoContactSource value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource $midocoContactSource
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactSourceRequest
     */
    public function setMidocoContactSource(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactSource $midocoContactSource = null): self
    {
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
}