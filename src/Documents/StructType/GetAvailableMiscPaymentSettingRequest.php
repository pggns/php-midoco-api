<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableMiscPaymentSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableMiscPaymentSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMiscPaymentSetting
     * @var \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $MidocoMiscPaymentSetting = null;
    /**
     * The typeID
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $typeID = null;
    /**
     * Constructor method for GetAvailableMiscPaymentSettingRequest
     * @uses GetAvailableMiscPaymentSettingRequest::setMidocoMiscPaymentSetting()
     * @uses GetAvailableMiscPaymentSettingRequest::setTypeID()
     * @param \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     * @param string $typeID
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null, ?string $typeID = null)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting)
            ->setTypeID($typeID);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO|null
     */
    public function getMidocoMiscPaymentSetting(): ?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @param \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableMiscPaymentSettingRequest
     */
    public function setMidocoMiscPaymentSetting(?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null): self
    {
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
    /**
     * Get typeID value
     * @return string|null
     */
    public function getTypeID(): ?string
    {
        return $this->typeID;
    }
    /**
     * Set typeID value
     * @param string $typeID
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableMiscPaymentSettingRequest
     */
    public function setTypeID(?string $typeID = null): self
    {
        // validation for constraint: string
        if (!is_null($typeID) && !is_string($typeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeID, true), gettype($typeID)), __LINE__);
        }
        $this->typeID = $typeID;
        
        return $this;
    }
}
