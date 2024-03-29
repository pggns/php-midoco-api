<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMarketingKeyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMarketingKeyRequest extends AbstractStructBase
{
    /**
     * The MidocoMarketingKey
     * Meta information extracted from the WSDL
     * - ref: MidocoMarketingKey
     * @var \Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO $MidocoMarketingKey = null;
    /**
     * Constructor method for SaveMarketingKeyRequest
     * @uses SaveMarketingKeyRequest::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO $midocoMarketingKey
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO $midocoMarketingKey = null)
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO|null
     */
    public function getMidocoMarketingKey(): ?\Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * Set MidocoMarketingKey value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO $midocoMarketingKey
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyRequest
     */
    public function setMidocoMarketingKey(?\Pggns\MidocoApi\OrderSD\StructType\MarketingKeyDTO $midocoMarketingKey = null): self
    {
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
}
