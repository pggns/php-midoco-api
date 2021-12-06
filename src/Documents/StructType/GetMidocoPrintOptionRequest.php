<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoPrintOptionRequest StructType
 * @subpackage Structs
 */
class GetMidocoPrintOptionRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintOption
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintOption
     * @var \Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO $MidocoPrintOption = null;
    /**
     * Constructor method for GetMidocoPrintOptionRequest
     * @uses GetMidocoPrintOptionRequest::setMidocoPrintOption()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO $midocoPrintOption
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO $midocoPrintOption = null)
    {
        $this
            ->setMidocoPrintOption($midocoPrintOption);
    }
    /**
     * Get MidocoPrintOption value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO|null
     */
    public function getMidocoPrintOption(): ?\Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO
    {
        return $this->MidocoPrintOption;
    }
    /**
     * Set MidocoPrintOption value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO $midocoPrintOption
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetMidocoPrintOptionRequest
     */
    public function setMidocoPrintOption(?\Pggns\MidocoApi\Api\Documents\StructType\PrintOptionDTO $midocoPrintOption = null): self
    {
        $this->MidocoPrintOption = $midocoPrintOption;
        
        return $this;
    }
}
