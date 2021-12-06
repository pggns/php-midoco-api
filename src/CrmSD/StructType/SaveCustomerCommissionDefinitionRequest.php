<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerCommissionDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveCustomerCommissionDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCommissionAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCommissionAssign
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO $MidocoCustomerCommissionAssign = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCustomerCommissionDefinitionRequest
     * @uses SaveCustomerCommissionDefinitionRequest::setMidocoCustomerCommissionAssign()
     * @uses SaveCustomerCommissionDefinitionRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO $midocoCustomerCommissionAssign
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO $midocoCustomerCommissionAssign = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCustomerCommissionAssign($midocoCustomerCommissionAssign)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCustomerCommissionAssign value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO|null
     */
    public function getMidocoCustomerCommissionAssign(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO
    {
        return $this->MidocoCustomerCommissionAssign;
    }
    /**
     * Set MidocoCustomerCommissionAssign value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO $midocoCustomerCommissionAssign
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCustomerCommissionDefinitionRequest
     */
    public function setMidocoCustomerCommissionAssign(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerCommissionAssignDTO $midocoCustomerCommissionAssign = null): self
    {
        $this->MidocoCustomerCommissionAssign = $midocoCustomerCommissionAssign;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCustomerCommissionDefinitionRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
