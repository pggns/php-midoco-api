<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteNamePrefixRequest StructType
 * @subpackage Structs
 */
class DeleteNamePrefixRequest extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for DeleteNamePrefixRequest
     * @uses DeleteNamePrefixRequest::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteNamePrefixRequest
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Api\Crm\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
