<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCostCentreRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCostCentreRequest extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCostCentre|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCostCentre $MidocoCostCentre = null;
    /**
     * Constructor method for DeleteCostCentreRequest
     * @uses DeleteCostCentreRequest::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCostCentre $midocoCostCentre
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCostCentre $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCostCentre|null
     */
    public function getMidocoCostCentre(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCostCentre
    {
        return $this->MidocoCostCentre;
    }
    /**
     * Set MidocoCostCentre value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCostCentre $midocoCostCentre
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCostCentreRequest
     */
    public function setMidocoCostCentre(?\Pggns\MidocoApi\Documents\StructType\MidocoCostCentre $midocoCostCentre = null): self
    {
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
}
