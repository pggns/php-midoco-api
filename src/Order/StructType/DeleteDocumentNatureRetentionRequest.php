<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentNatureRetentionRequest StructType
 * @subpackage Structs
 */
class DeleteDocumentNatureRetentionRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType $MidocoDocumentNatureRetention = null;
    /**
     * Constructor method for DeleteDocumentNatureRetentionRequest
     * @uses DeleteDocumentNatureRetentionRequest::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null)
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType|null
     */
    public function getMidocoDocumentNatureRetention(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteDocumentNatureRetentionRequest
     */
    public function setMidocoDocumentNatureRetention(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null): self
    {
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
}
