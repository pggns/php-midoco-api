<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderPaymentPaycodeRequest StructType
 * @subpackage Structs
 */
class SaveOrderPaymentPaycodeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderPaymentPaycode
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderPaymentPaycode
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO $MidocoOrderPaymentPaycode = null;
    /**
     * Constructor method for SaveOrderPaymentPaycodeRequest
     * @uses SaveOrderPaymentPaycodeRequest::setMidocoOrderPaymentPaycode()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode = null)
    {
        $this
            ->setMidocoOrderPaymentPaycode($midocoOrderPaymentPaycode);
    }
    /**
     * Get MidocoOrderPaymentPaycode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO|null
     */
    public function getMidocoOrderPaymentPaycode(): ?\Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO
    {
        return $this->MidocoOrderPaymentPaycode;
    }
    /**
     * Set MidocoOrderPaymentPaycode value
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderPaymentPaycodeRequest
     */
    public function setMidocoOrderPaymentPaycode(?\Pggns\MidocoApi\Api\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode = null): self
    {
        $this->MidocoOrderPaymentPaycode = $midocoOrderPaymentPaycode;
        
        return $this;
    }
}
