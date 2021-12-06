<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSuppCancelCEmailRequest StructType
 * @subpackage Structs
 */
class DeleteSuppCancelCEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - ref: MidocoSuppCancelCEmail
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail $MidocoSuppCancelCEmail = null;
    /**
     * Constructor method for DeleteSuppCancelCEmailRequest
     * @uses DeleteSuppCancelCEmailRequest::setMidocoSuppCancelCEmail()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null)
    {
        $this
            ->setMidocoSuppCancelCEmail($midocoSuppCancelCEmail);
    }
    /**
     * Get MidocoSuppCancelCEmail value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail|null
     */
    public function getMidocoSuppCancelCEmail(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail
    {
        return $this->MidocoSuppCancelCEmail;
    }
    /**
     * Set MidocoSuppCancelCEmail value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCEmailRequest
     */
    public function setMidocoSuppCancelCEmail(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null): self
    {
        $this->MidocoSuppCancelCEmail = $midocoSuppCancelCEmail;
        
        return $this;
    }
}
