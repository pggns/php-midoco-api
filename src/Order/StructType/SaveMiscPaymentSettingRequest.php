<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMiscPaymentSettingRequest StructType
 * @subpackage Structs
 */
class SaveMiscPaymentSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoMiscPaymentSetting
     * @var \Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO $MidocoMiscPaymentSetting = null;
    /**
     * Constructor method for SaveMiscPaymentSettingRequest
     * @uses SaveMiscPaymentSettingRequest::setMidocoMiscPaymentSetting()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO|null
     */
    public function getMidocoMiscPaymentSetting(): ?\Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMiscPaymentSettingRequest
     */
    public function setMidocoMiscPaymentSetting(?\Pggns\MidocoApi\Api\Order\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null): self
    {
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
}
