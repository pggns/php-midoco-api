<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignWS --- gets the MisCustomerList corresponding to a crm campaign (for WS)
 * @subpackage Structs
 */
class GetCampaignWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResultWS
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResultWS
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[]
     */
    protected ?array $MidocoMisCampaignResultWS = null;
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[]
     */
    protected ?array $MidocoMisCustomerResult = null;
    /**
     * Constructor method for GetCampaignWSResponse
     * @uses GetCampaignWSResponse::setMidocoMisCampaignResultWS()
     * @uses GetCampaignWSResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     */
    public function __construct(?array $midocoMisCampaignResultWS = null, ?array $midocoMisCustomerResult = null)
    {
        $this
            ->setMidocoMisCampaignResultWS($midocoMisCampaignResultWS)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResultWS value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[]
     */
    public function getMidocoMisCampaignResultWS(): ?array
    {
        return $this->MidocoMisCampaignResultWS;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCampaignResultWS method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResultWS method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignWSResponseMidocoMisCampaignResultWSItem) {
            // validation for constraint: itemType
            if (!$getCampaignWSResponseMidocoMisCampaignResultWSItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType) {
                $invalidValues[] = is_object($getCampaignWSResponseMidocoMisCampaignResultWSItem) ? get_class($getCampaignWSResponseMidocoMisCampaignResultWSItem) : sprintf('%s(%s)', gettype($getCampaignWSResponseMidocoMisCampaignResultWSItem), var_export($getCampaignWSResponseMidocoMisCampaignResultWSItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse
     */
    public function setMidocoMisCampaignResultWS(?array $midocoMisCampaignResultWS = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultWSArrayErrorMessage = self::validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS($midocoMisCampaignResultWS))) {
            throw new InvalidArgumentException($midocoMisCampaignResultWSArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResultWS = $midocoMisCampaignResultWS;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse
     */
    public function addToMidocoMisCampaignResultWS(\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResultWS[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[]
     */
    public function getMidocoMisCustomerResult(): ?array
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCustomerResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCustomerResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignWSResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignWSResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignWSResponseMidocoMisCustomerResultItem) ? get_class($getCampaignWSResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignWSResponseMidocoMisCustomerResultItem), var_export($getCampaignWSResponseMidocoMisCustomerResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse
     */
    public function setMidocoMisCustomerResult(?array $midocoMisCustomerResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCustomerResultArrayErrorMessage = self::validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult($midocoMisCustomerResult))) {
            throw new InvalidArgumentException($midocoMisCustomerResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse
     */
    public function addToMidocoMisCustomerResult(\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCustomerResult[] = $item;
        
        return $this;
    }
}
