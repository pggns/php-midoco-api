<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitCardTypeRequest StructType
 * @subpackage Structs
 */
class SaveDebitCardTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitCardType
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitCardType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO $MidocoDebitCardType = null;
    /**
     * Constructor method for SaveDebitCardTypeRequest
     * @uses SaveDebitCardTypeRequest::setMidocoDebitCardType()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO $midocoDebitCardType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO $midocoDebitCardType = null)
    {
        $this
            ->setMidocoDebitCardType($midocoDebitCardType);
    }
    /**
     * Get MidocoDebitCardType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO|null
     */
    public function getMidocoDebitCardType(): ?\Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO
    {
        return $this->MidocoDebitCardType;
    }
    /**
     * Set MidocoDebitCardType value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO $midocoDebitCardType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveDebitCardTypeRequest
     */
    public function setMidocoDebitCardType(?\Pggns\MidocoApi\Api\Crm\StructType\DebitCardTypeDTO $midocoDebitCardType = null): self
    {
        $this->MidocoDebitCardType = $midocoDebitCardType;
        
        return $this;
    }
}
