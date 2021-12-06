<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierFormatRequest StructType
 * @subpackage Structs
 */
class GetMidocoSupplierFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierReportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierReportFormat
     * @var \Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO $MidocoSupplierReportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierFormatRequest
     * @uses GetMidocoSupplierFormatRequest::setMidocoSupplierReportFormat()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null)
    {
        $this
            ->setMidocoSupplierReportFormat($midocoSupplierReportFormat);
    }
    /**
     * Get MidocoSupplierReportFormat value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO|null
     */
    public function getMidocoSupplierReportFormat(): ?\Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO
    {
        return $this->MidocoSupplierReportFormat;
    }
    /**
     * Set MidocoSupplierReportFormat value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMidocoSupplierFormatRequest
     */
    public function setMidocoSupplierReportFormat(?\Pggns\MidocoApi\Api\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null): self
    {
        $this->MidocoSupplierReportFormat = $midocoSupplierReportFormat;
        
        return $this;
    }
}
