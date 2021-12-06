<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationTypeRequest StructType
 * @subpackage Structs
 */
class SaveSalutationTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationType
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationType
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO $MidocoSalutationType = null;
    /**
     * Constructor method for SaveSalutationTypeRequest
     * @uses SaveSalutationTypeRequest::setMidocoSalutationType()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO $midocoSalutationType
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO $midocoSalutationType = null)
    {
        $this
            ->setMidocoSalutationType($midocoSalutationType);
    }
    /**
     * Get MidocoSalutationType value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO|null
     */
    public function getMidocoSalutationType(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO
    {
        return $this->MidocoSalutationType;
    }
    /**
     * Set MidocoSalutationType value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO $midocoSalutationType
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveSalutationTypeRequest
     */
    public function setMidocoSalutationType(?\Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeDTO $midocoSalutationType = null): self
    {
        $this->MidocoSalutationType = $midocoSalutationType;
        
        return $this;
    }
}
