<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfGroupRequest StructType
 * @subpackage Structs
 */
class SaveMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for SaveMfGroupRequest
     * @uses SaveMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}