<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCateringCodeRequest StructType
 * @subpackage Structs
 */
class SaveCateringCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * Constructor method for SaveCateringCodeRequest
     * @uses SaveCateringCodeRequest::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode $midocoCateringCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveCateringCodeRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
}
