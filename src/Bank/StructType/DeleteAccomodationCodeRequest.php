<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAccomodationCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAccomodationCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAccomodationCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAccomodationCode
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode $MidocoAccomodationCode = null;
    /**
     * Constructor method for DeleteAccomodationCodeRequest
     * @uses DeleteAccomodationCodeRequest::setMidocoAccomodationCode()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode $midocoAccomodationCode
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode $midocoAccomodationCode = null)
    {
        $this
            ->setMidocoAccomodationCode($midocoAccomodationCode);
    }
    /**
     * Get MidocoAccomodationCode value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode|null
     */
    public function getMidocoAccomodationCode(): ?\Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode
    {
        return $this->MidocoAccomodationCode;
    }
    /**
     * Set MidocoAccomodationCode value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode $midocoAccomodationCode
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteAccomodationCodeRequest
     */
    public function setMidocoAccomodationCode(?\Pggns\MidocoApi\Bank\StructType\MidocoAccomodationCode $midocoAccomodationCode = null): self
    {
        $this->MidocoAccomodationCode = $midocoAccomodationCode;
        
        return $this;
    }
}
