<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteNamePrefixRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteNamePrefixRequest extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Documents\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for DeleteNamePrefixRequest
     * @uses DeleteNamePrefixRequest::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Documents\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Documents\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Documents\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Documents\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteNamePrefixRequest
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Documents\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
