<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentRequest StructType
 * @subpackage Structs
 */
class GetDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDocumentId
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocumentId
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $MidocoCrmDocumentId = null;
    /**
     * Constructor method for GetDocumentRequest
     * @uses GetDocumentRequest::setMidocoCrmDocumentId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null)
    {
        $this
            ->setMidocoCrmDocumentId($midocoCrmDocumentId);
    }
    /**
     * Get MidocoCrmDocumentId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO|null
     */
    public function getMidocoCrmDocumentId(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO
    {
        return $this->MidocoCrmDocumentId;
    }
    /**
     * Set MidocoCrmDocumentId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDocumentRequest
     */
    public function setMidocoCrmDocumentId(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null): self
    {
        $this->MidocoCrmDocumentId = $midocoCrmDocumentId;
        
        return $this;
    }
}
