<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitNoticeReponse StructType
 * @subpackage Structs
 */
class GetUnitNoticeReponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO[]
     */
    protected ?array $MidocoOrgunitNotice = null;
    /**
     * Constructor method for GetUnitNoticeReponse
     * @uses GetUnitNoticeReponse::setMidocoOrgunitNotice()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO[] $midocoOrgunitNotice
     */
    public function __construct(?array $midocoOrgunitNotice = null)
    {
        $this
            ->setMidocoOrgunitNotice($midocoOrgunitNotice);
    }
    /**
     * Get MidocoOrgunitNotice value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO[]
     */
    public function getMidocoOrgunitNotice(): ?array
    {
        return $this->MidocoOrgunitNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunitNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitNoticeForArrayConstraintsFromSetMidocoOrgunitNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnitNoticeReponseMidocoOrgunitNoticeItem) {
            // validation for constraint: itemType
            if (!$getUnitNoticeReponseMidocoOrgunitNoticeItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO) {
                $invalidValues[] = is_object($getUnitNoticeReponseMidocoOrgunitNoticeItem) ? get_class($getUnitNoticeReponseMidocoOrgunitNoticeItem) : sprintf('%s(%s)', gettype($getUnitNoticeReponseMidocoOrgunitNoticeItem), var_export($getUnitNoticeReponseMidocoOrgunitNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitNotice property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO[] $midocoOrgunitNotice
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetUnitNoticeReponse
     */
    public function setMidocoOrgunitNotice(?array $midocoOrgunitNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitNoticeArrayErrorMessage = self::validateMidocoOrgunitNoticeForArrayConstraintsFromSetMidocoOrgunitNotice($midocoOrgunitNotice))) {
            throw new InvalidArgumentException($midocoOrgunitNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitNotice = $midocoOrgunitNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetUnitNoticeReponse
     */
    public function addToMidocoOrgunitNotice(\Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitNotice property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\UnitNoticeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitNotice[] = $item;
        
        return $this;
    }
}
