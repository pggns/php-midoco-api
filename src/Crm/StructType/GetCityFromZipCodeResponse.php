<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCityFromZipCodeResponse StructType
 * @subpackage Structs
 */
class GetCityFromZipCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CityDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CityDTO $MidocoCity = null;
    /**
     * Constructor method for GetCityFromZipCodeResponse
     * @uses GetCityFromZipCodeResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CityDTO $midocoCity
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CityDTO $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CityDTO|null
     */
    public function getMidocoCity(): ?\Pggns\MidocoApi\Api\Crm\StructType\CityDTO
    {
        return $this->MidocoCity;
    }
    /**
     * Set MidocoCity value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CityDTO $midocoCity
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCityFromZipCodeResponse
     */
    public function setMidocoCity(?\Pggns\MidocoApi\Api\Crm\StructType\CityDTO $midocoCity = null): self
    {
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
}
