<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentNatureRetentionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDocumentNatureRetentionRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType $MidocoDocumentNatureRetention = null;
    /**
     * Constructor method for SaveDocumentNatureRetentionRequest
     * @uses SaveDocumentNatureRetentionRequest::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null)
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType|null
     */
    public function getMidocoDocumentNatureRetention(): ?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDocumentNatureRetentionRequest
     */
    public function setMidocoDocumentNatureRetention(?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null): self
    {
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
}
