<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcProxyTarget StructType
 * @subpackage Structs
 */
class MidocoCcProxyTarget extends CcproxyTargetDTO
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO
     */
    protected \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(\Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO $midocoCcProxyHandler)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO
     */
    public function getMidocoCcProxyHandler(): \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(\Pggns\MidocoApi\Api\Mis\StructType\CcproxyHandlerDTO $midocoCcProxyHandler): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
