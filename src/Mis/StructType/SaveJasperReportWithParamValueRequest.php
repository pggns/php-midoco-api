<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperReportWithParamValueRequest StructType
 * @subpackage Structs
 */
class SaveJasperReportWithParamValueRequest extends AbstractStructBase
{
    /**
     * The MidocoSavedReportAndParamValue
     * Meta information extracted from the WSDL
     * - ref: system:MidocoSavedReportAndParamValue
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue $MidocoSavedReportAndParamValue = null;
    /**
     * Constructor method for SaveJasperReportWithParamValueRequest
     * @uses SaveJasperReportWithParamValueRequest::setMidocoSavedReportAndParamValue()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue = null)
    {
        $this
            ->setMidocoSavedReportAndParamValue($midocoSavedReportAndParamValue);
    }
    /**
     * Get MidocoSavedReportAndParamValue value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue|null
     */
    public function getMidocoSavedReportAndParamValue(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue
    {
        return $this->MidocoSavedReportAndParamValue;
    }
    /**
     * Set MidocoSavedReportAndParamValue value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveJasperReportWithParamValueRequest
     */
    public function setMidocoSavedReportAndParamValue(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue = null): self
    {
        $this->MidocoSavedReportAndParamValue = $midocoSavedReportAndParamValue;
        
        return $this;
    }
}
