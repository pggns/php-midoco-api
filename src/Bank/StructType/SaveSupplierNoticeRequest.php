<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierNotice
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $MidocoSupplierNotice = null;
    /**
     * Constructor method for SaveSupplierNoticeRequest
     * @uses SaveSupplierNoticeRequest::setMidocoSupplierNotice()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $midocoSupplierNotice
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $midocoSupplierNotice = null)
    {
        $this
            ->setMidocoSupplierNotice($midocoSupplierNotice);
    }
    /**
     * Get MidocoSupplierNotice value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice|null
     */
    public function getMidocoSupplierNotice(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice
    {
        return $this->MidocoSupplierNotice;
    }
    /**
     * Set MidocoSupplierNotice value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $midocoSupplierNotice
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierNoticeRequest
     */
    public function setMidocoSupplierNotice(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $midocoSupplierNotice = null): self
    {
        $this->MidocoSupplierNotice = $midocoSupplierNotice;
        
        return $this;
    }
}
