<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDatastoreRequest StructType
 * @subpackage Structs
 */
class DeleteDatastoreRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for DeleteDatastoreRequest
     * @uses DeleteDatastoreRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteDatastoreRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Api\Orderlists\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
