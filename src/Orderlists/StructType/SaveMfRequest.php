<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMfRequest
     * @uses SaveMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
