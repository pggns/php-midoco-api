<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperReportParamValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveJasperReportParamValueRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $MidocoJasperReportParamValue = null;
    /**
     * Constructor method for SaveJasperReportParamValueRequest
     * @uses SaveJasperReportParamValueRequest::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO|null
     */
    public function getMidocoJasperReportParamValue(): ?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueRequest
     */
    public function setMidocoJasperReportParamValue(?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null): self
    {
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
}
