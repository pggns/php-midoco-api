<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationNameRequest StructType
 * @subpackage Structs
 */
class SaveSalutationNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationName
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationName
     * @var \Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO $MidocoSalutationName = null;
    /**
     * Constructor method for SaveSalutationNameRequest
     * @uses SaveSalutationNameRequest::setMidocoSalutationName()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO $midocoSalutationName
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO $midocoSalutationName = null)
    {
        $this
            ->setMidocoSalutationName($midocoSalutationName);
    }
    /**
     * Get MidocoSalutationName value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO|null
     */
    public function getMidocoSalutationName(): ?\Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO
    {
        return $this->MidocoSalutationName;
    }
    /**
     * Set MidocoSalutationName value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO $midocoSalutationName
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveSalutationNameRequest
     */
    public function setMidocoSalutationName(?\Pggns\MidocoApi\Api\Crm\StructType\SalutationNameDTO $midocoSalutationName = null): self
    {
        $this->MidocoSalutationName = $midocoSalutationName;
        
        return $this;
    }
}
