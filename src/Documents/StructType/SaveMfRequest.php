<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfRequest StructType
 * @subpackage Structs
 */
class SaveMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMfRequest
     * @uses SaveMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}