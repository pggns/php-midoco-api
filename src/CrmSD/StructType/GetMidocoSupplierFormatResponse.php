<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierFormatResponse StructType
 * @subpackage Structs
 */
class GetMidocoSupplierFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierReportFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierReportFormat
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO $MidocoSupplierReportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierFormatResponse
     * @uses GetMidocoSupplierFormatResponse::setMidocoSupplierReportFormat()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null)
    {
        $this
            ->setMidocoSupplierReportFormat($midocoSupplierReportFormat);
    }
    /**
     * Get MidocoSupplierReportFormat value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO|null
     */
    public function getMidocoSupplierReportFormat(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO
    {
        return $this->MidocoSupplierReportFormat;
    }
    /**
     * Set MidocoSupplierReportFormat value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMidocoSupplierFormatResponse
     */
    public function setMidocoSupplierReportFormat(?\Pggns\MidocoApi\Api\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null): self
    {
        $this->MidocoSupplierReportFormat = $midocoSupplierReportFormat;
        
        return $this;
    }
}
