<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoPrintOptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoPrintOptionRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintOption
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintOption
     * @var \Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO $MidocoPrintOption = null;
    /**
     * Constructor method for SaveMidocoPrintOptionRequest
     * @uses SaveMidocoPrintOptionRequest::setMidocoPrintOption()
     * @param \Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO $midocoPrintOption
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO $midocoPrintOption = null)
    {
        $this
            ->setMidocoPrintOption($midocoPrintOption);
    }
    /**
     * Get MidocoPrintOption value
     * @return \Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO|null
     */
    public function getMidocoPrintOption(): ?\Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO
    {
        return $this->MidocoPrintOption;
    }
    /**
     * Set MidocoPrintOption value
     * @param \Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO $midocoPrintOption
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoPrintOptionRequest
     */
    public function setMidocoPrintOption(?\Pggns\MidocoApi\Orderlists\StructType\PrintOptionDTO $midocoPrintOption = null): self
    {
        $this->MidocoPrintOption = $midocoPrintOption;
        
        return $this;
    }
}
