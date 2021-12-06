<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationRequest StructType
 * @subpackage Structs
 */
class SaveSalutationRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutation
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutation
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation $MidocoSalutation = null;
    /**
     * Constructor method for SaveSalutationRequest
     * @uses SaveSalutationRequest::setMidocoSalutation()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation $midocoSalutation
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation $midocoSalutation = null)
    {
        $this
            ->setMidocoSalutation($midocoSalutation);
    }
    /**
     * Get MidocoSalutation value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation|null
     */
    public function getMidocoSalutation(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation
    {
        return $this->MidocoSalutation;
    }
    /**
     * Set MidocoSalutation value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation $midocoSalutation
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveSalutationRequest
     */
    public function setMidocoSalutation(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSalutation $midocoSalutation = null): self
    {
        $this->MidocoSalutation = $midocoSalutation;
        
        return $this;
    }
}
