<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfRequest StructType
 * @subpackage Structs
 */
class DeleteMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for DeleteMfRequest
     * @uses DeleteMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Api\Booking\StructType\DeleteMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
