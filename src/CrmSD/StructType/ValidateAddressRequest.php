<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressRequest StructType
 * @subpackage Structs
 */
class ValidateAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoValidateAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoValidateAddress
     * @var \Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO $MidocoValidateAddress = null;
    /**
     * Constructor method for ValidateAddressRequest
     * @uses ValidateAddressRequest::setMidocoValidateAddress()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress = null)
    {
        $this
            ->setMidocoValidateAddress($midocoValidateAddress);
    }
    /**
     * Get MidocoValidateAddress value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO|null
     */
    public function getMidocoValidateAddress(): ?\Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO
    {
        return $this->MidocoValidateAddress;
    }
    /**
     * Set MidocoValidateAddress value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress
     * @return \Pggns\MidocoApi\CrmSD\StructType\ValidateAddressRequest
     */
    public function setMidocoValidateAddress(?\Pggns\MidocoApi\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress = null): self
    {
        $this->MidocoValidateAddress = $midocoValidateAddress;
        
        return $this;
    }
}
