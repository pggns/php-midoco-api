<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVatCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for DeleteVatCodeRequest
     * @uses DeleteVatCodeRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Documents\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteVatCodeRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Documents\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}
