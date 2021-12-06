<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMisReportParamsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMisReportParams --- returns all the parameters of the given report
 * @subpackage Structs
 */
class GetMisReportParamsResponse extends AbstractStructBase
{
    /**
     * The MidocoMisReportParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisReportParam
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam[]
     */
    protected ?array $MidocoMisReportParam = null;
    /**
     * Constructor method for GetMisReportParamsResponse
     * @uses GetMisReportParamsResponse::setMidocoMisReportParam()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam[] $midocoMisReportParam
     */
    public function __construct(?array $midocoMisReportParam = null)
    {
        $this
            ->setMidocoMisReportParam($midocoMisReportParam);
    }
    /**
     * Get MidocoMisReportParam value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam[]
     */
    public function getMidocoMisReportParam(): ?array
    {
        return $this->MidocoMisReportParam;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisReportParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisReportParam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisReportParamForArrayConstraintsFromSetMidocoMisReportParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMisReportParamsResponseMidocoMisReportParamItem) {
            // validation for constraint: itemType
            if (!$getMisReportParamsResponseMidocoMisReportParamItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam) {
                $invalidValues[] = is_object($getMisReportParamsResponseMidocoMisReportParamItem) ? get_class($getMisReportParamsResponseMidocoMisReportParamItem) : sprintf('%s(%s)', gettype($getMisReportParamsResponseMidocoMisReportParamItem), var_export($getMisReportParamsResponseMidocoMisReportParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisReportParam property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam[] $midocoMisReportParam
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMisReportParamsResponse
     */
    public function setMidocoMisReportParam(?array $midocoMisReportParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisReportParamArrayErrorMessage = self::validateMidocoMisReportParamForArrayConstraintsFromSetMidocoMisReportParam($midocoMisReportParam))) {
            throw new InvalidArgumentException($midocoMisReportParamArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisReportParam = $midocoMisReportParam;
        
        return $this;
    }
    /**
     * Add item to MidocoMisReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMisReportParamsResponse
     */
    public function addToMidocoMisReportParam(\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam) {
            throw new InvalidArgumentException(sprintf('The MidocoMisReportParam property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisReportParam[] = $item;
        
        return $this;
    }
}