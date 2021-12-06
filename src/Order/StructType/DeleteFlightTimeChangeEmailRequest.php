<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFlightTimeChangeEmailRequest StructType
 * @subpackage Structs
 */
class DeleteFlightTimeChangeEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - ref: MidocoFlightTimeChangeEmail
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType $MidocoFlightTimeChangeEmail = null;
    /**
     * Constructor method for DeleteFlightTimeChangeEmailRequest
     * @uses DeleteFlightTimeChangeEmailRequest::setMidocoFlightTimeChangeEmail()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail = null)
    {
        $this
            ->setMidocoFlightTimeChangeEmail($midocoFlightTimeChangeEmail);
    }
    /**
     * Get MidocoFlightTimeChangeEmail value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType|null
     */
    public function getMidocoFlightTimeChangeEmail(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType
    {
        return $this->MidocoFlightTimeChangeEmail;
    }
    /**
     * Set MidocoFlightTimeChangeEmail value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteFlightTimeChangeEmailRequest
     */
    public function setMidocoFlightTimeChangeEmail(?\Pggns\MidocoApi\Api\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail = null): self
    {
        $this->MidocoFlightTimeChangeEmail = $midocoFlightTimeChangeEmail;
        
        return $this;
    }
}
