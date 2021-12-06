<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for DeleteNamePrefixResponse
     * @uses DeleteNamePrefixResponse::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DeleteNamePrefixResponse
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Api\Documents\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
