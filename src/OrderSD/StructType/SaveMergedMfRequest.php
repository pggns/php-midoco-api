<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMergedMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMergedMfRequest
     * @uses SaveMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
