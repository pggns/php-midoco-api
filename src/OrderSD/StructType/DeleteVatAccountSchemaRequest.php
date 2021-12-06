<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatAccountSchemaRequest StructType
 * @subpackage Structs
 */
class DeleteVatAccountSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountSchema
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema $MidocoVatAccountSchema = null;
    /**
     * Constructor method for DeleteVatAccountSchemaRequest
     * @uses DeleteVatAccountSchemaRequest::setMidocoVatAccountSchema()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null)
    {
        $this
            ->setMidocoVatAccountSchema($midocoVatAccountSchema);
    }
    /**
     * Get MidocoVatAccountSchema value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema|null
     */
    public function getMidocoVatAccountSchema(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema
    {
        return $this->MidocoVatAccountSchema;
    }
    /**
     * Set MidocoVatAccountSchema value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteVatAccountSchemaRequest
     */
    public function setMidocoVatAccountSchema(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null): self
    {
        $this->MidocoVatAccountSchema = $midocoVatAccountSchema;
        
        return $this;
    }
}
