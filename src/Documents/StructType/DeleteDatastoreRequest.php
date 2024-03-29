<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDatastoreRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDatastoreRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Documents\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for DeleteDatastoreRequest
     * @uses DeleteDatastoreRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Documents\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Documents\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Documents\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Documents\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDatastoreRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Documents\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
