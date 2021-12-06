<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentRepositoryRequest StructType
 * @subpackage Structs
 */
class SaveDocumentRepositoryRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentRepository
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentRepository
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository $MidocoDocumentRepository = null;
    /**
     * Constructor method for SaveDocumentRepositoryRequest
     * @uses SaveDocumentRepositoryRequest::setMidocoDocumentRepository()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository = null)
    {
        $this
            ->setMidocoDocumentRepository($midocoDocumentRepository);
    }
    /**
     * Get MidocoDocumentRepository value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository|null
     */
    public function getMidocoDocumentRepository(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository
    {
        return $this->MidocoDocumentRepository;
    }
    /**
     * Set MidocoDocumentRepository value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveDocumentRepositoryRequest
     */
    public function setMidocoDocumentRepository(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository = null): self
    {
        $this->MidocoDocumentRepository = $midocoDocumentRepository;
        
        return $this;
    }
}
