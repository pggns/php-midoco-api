<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationRequest StructType
 * @subpackage Structs
 */
class DeleteSalutationRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutation
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutation
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation $MidocoSalutation = null;
    /**
     * Constructor method for DeleteSalutationRequest
     * @uses DeleteSalutationRequest::setMidocoSalutation()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation $midocoSalutation
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation $midocoSalutation = null)
    {
        $this
            ->setMidocoSalutation($midocoSalutation);
    }
    /**
     * Get MidocoSalutation value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation|null
     */
    public function getMidocoSalutation(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation
    {
        return $this->MidocoSalutation;
    }
    /**
     * Set MidocoSalutation value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation $midocoSalutation
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteSalutationRequest
     */
    public function setMidocoSalutation(?\Pggns\MidocoApi\CrmSD\StructType\MidocoSalutation $midocoSalutation = null): self
    {
        $this->MidocoSalutation = $midocoSalutation;
        
        return $this;
    }
}
