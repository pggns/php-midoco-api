<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTempPrintJobResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTempPrintJobResponse extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjob
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTempPrintjob
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob $MidocoTempPrintjob = null;
    /**
     * Constructor method for GetTempPrintJobResponse
     * @uses GetTempPrintJobResponse::setMidocoTempPrintjob()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob $midocoTempPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob $midocoTempPrintjob = null)
    {
        $this
            ->setMidocoTempPrintjob($midocoTempPrintjob);
    }
    /**
     * Get MidocoTempPrintjob value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob|null
     */
    public function getMidocoTempPrintjob(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob
    {
        return $this->MidocoTempPrintjob;
    }
    /**
     * Set MidocoTempPrintjob value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob $midocoTempPrintjob
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetTempPrintJobResponse
     */
    public function setMidocoTempPrintjob(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoTempPrintjob $midocoTempPrintjob = null): self
    {
        $this->MidocoTempPrintjob = $midocoTempPrintjob;
        
        return $this;
    }
}
