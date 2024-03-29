<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteExternVoucherTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteExternVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoExternVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoExternVoucherType
     * @var \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $MidocoExternVoucherType = null;
    /**
     * Constructor method for DeleteExternVoucherTypeRequest
     * @uses DeleteExternVoucherTypeRequest::setMidocoExternVoucherType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null)
    {
        $this
            ->setMidocoExternVoucherType($midocoExternVoucherType);
    }
    /**
     * Get MidocoExternVoucherType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO|null
     */
    public function getMidocoExternVoucherType(): ?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO
    {
        return $this->MidocoExternVoucherType;
    }
    /**
     * Set MidocoExternVoucherType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeRequest
     */
    public function setMidocoExternVoucherType(?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null): self
    {
        $this->MidocoExternVoucherType = $midocoExternVoucherType;
        
        return $this;
    }
}
