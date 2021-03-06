<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmPersonTravellerResponse StructType
 * @subpackage Structs
 */
class SaveCrmPersonTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCrmPersonTravellerResponse
     * @uses SaveCrmPersonTravellerResponse::setMidocoCrmPersonTraveller()
     * @uses SaveCrmPersonTravellerResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO|null
     */
    public function getMidocoCrmPersonTraveller(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCrmPersonTravellerResponse
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCrmPersonTravellerResponse
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
