<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteEInvoiceGatewayRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete an e-invoice gateway configuration. The only required fields are orgUnit and gateway. The E-Mail gateway can not be deleted.
 * @subpackage Structs
 */
class DeleteEInvoiceGatewayRequest extends AbstractStructBase
{
    /**
     * The MidocoEInvoiceGateway
     * Meta information extracted from the WSDL
     * - ref: MidocoEInvoiceGateway
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO $MidocoEInvoiceGateway = null;
    /**
     * Constructor method for DeleteEInvoiceGatewayRequest
     * @uses DeleteEInvoiceGatewayRequest::setMidocoEInvoiceGateway()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway = null)
    {
        $this
            ->setMidocoEInvoiceGateway($midocoEInvoiceGateway);
    }
    /**
     * Get MidocoEInvoiceGateway value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO|null
     */
    public function getMidocoEInvoiceGateway(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO
    {
        return $this->MidocoEInvoiceGateway;
    }
    /**
     * Set MidocoEInvoiceGateway value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteEInvoiceGatewayRequest
     */
    public function setMidocoEInvoiceGateway(?\Pggns\MidocoApi\Api\Orderlists\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway = null): self
    {
        $this->MidocoEInvoiceGateway = $midocoEInvoiceGateway;
        
        return $this;
    }
}
