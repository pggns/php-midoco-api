<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDictionaryNameResponse StructType
 * @subpackage Structs
 */
class SaveDictionaryNameResponse extends AbstractStructBase
{
    /**
     * The MidocoDictionaryName
     * Meta information extracted from the WSDL
     * - ref: MidocoDictionaryName
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO $MidocoDictionaryName = null;
    /**
     * Constructor method for SaveDictionaryNameResponse
     * @uses SaveDictionaryNameResponse::setMidocoDictionaryName()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName = null)
    {
        $this
            ->setMidocoDictionaryName($midocoDictionaryName);
    }
    /**
     * Get MidocoDictionaryName value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO|null
     */
    public function getMidocoDictionaryName(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO
    {
        return $this->MidocoDictionaryName;
    }
    /**
     * Set MidocoDictionaryName value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveDictionaryNameResponse
     */
    public function setMidocoDictionaryName(?\Pggns\MidocoApi\Api\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName = null): self
    {
        $this->MidocoDictionaryName = $midocoDictionaryName;
        
        return $this;
    }
}
