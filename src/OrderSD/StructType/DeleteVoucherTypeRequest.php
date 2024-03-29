<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVoucherTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoVoucherType
     * @var \Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO $MidocoVoucherType = null;
    /**
     * Constructor method for DeleteVoucherTypeRequest
     * @uses DeleteVoucherTypeRequest::setMidocoVoucherType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO $midocoVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO $midocoVoucherType = null)
    {
        $this
            ->setMidocoVoucherType($midocoVoucherType);
    }
    /**
     * Get MidocoVoucherType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO|null
     */
    public function getMidocoVoucherType(): ?\Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO
    {
        return $this->MidocoVoucherType;
    }
    /**
     * Set MidocoVoucherType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO $midocoVoucherType
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeRequest
     */
    public function setMidocoVoucherType(?\Pggns\MidocoApi\OrderSD\StructType\VoucherTypeDTO $midocoVoucherType = null): self
    {
        $this->MidocoVoucherType = $midocoVoucherType;
        
        return $this;
    }
}
