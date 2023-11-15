<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSalutationTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationType
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationType
     * @var \Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO $MidocoSalutationType = null;
    /**
     * Constructor method for SaveSalutationTypeRequest
     * @uses SaveSalutationTypeRequest::setMidocoSalutationType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO $midocoSalutationType
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO $midocoSalutationType = null)
    {
        $this
            ->setMidocoSalutationType($midocoSalutationType);
    }
    /**
     * Get MidocoSalutationType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO|null
     */
    public function getMidocoSalutationType(): ?\Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO
    {
        return $this->MidocoSalutationType;
    }
    /**
     * Set MidocoSalutationType value
     * @param \Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO $midocoSalutationType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveSalutationTypeRequest
     */
    public function setMidocoSalutationType(?\Pggns\MidocoApi\Crmsd\StructType\SalutationTypeDTO $midocoSalutationType = null): self
    {
        $this->MidocoSalutationType = $midocoSalutationType;
        
        return $this;
    }
}