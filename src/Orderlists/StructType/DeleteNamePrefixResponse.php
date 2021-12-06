<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteNamePrefixResponse StructType
 * @subpackage Structs
 */
class DeleteNamePrefixResponse extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for DeleteNamePrefixResponse
     * @uses DeleteNamePrefixResponse::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteNamePrefixResponse
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Api\Orderlists\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
