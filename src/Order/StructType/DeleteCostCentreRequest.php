<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCostCentreRequest StructType
 * @subpackage Structs
 */
class DeleteCostCentreRequest extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre $MidocoCostCentre = null;
    /**
     * Constructor method for DeleteCostCentreRequest
     * @uses DeleteCostCentreRequest::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre $midocoCostCentre
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre|null
     */
    public function getMidocoCostCentre(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre
    {
        return $this->MidocoCostCentre;
    }
    /**
     * Set MidocoCostCentre value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre $midocoCostCentre
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteCostCentreRequest
     */
    public function setMidocoCostCentre(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCostCentre $midocoCostCentre = null): self
    {
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
}
