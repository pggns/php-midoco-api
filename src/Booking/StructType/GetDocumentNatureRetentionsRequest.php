<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureRetentionsRequest StructType
 * @subpackage Structs
 */
class GetDocumentNatureRetentionsRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType $MidocoDocumentNatureRetention = null;
    /**
     * Constructor method for GetDocumentNatureRetentionsRequest
     * @uses GetDocumentNatureRetentionsRequest::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null)
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType|null
     */
    public function getMidocoDocumentNatureRetention(): ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetDocumentNatureRetentionsRequest
     */
    public function setMidocoDocumentNatureRetention(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null): self
    {
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
}