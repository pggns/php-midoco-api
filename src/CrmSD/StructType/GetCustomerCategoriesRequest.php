<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCategoriesRequest StructType
 * @subpackage Structs
 */
class GetCustomerCategoriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory $MidocoCustomerCategory = null;
    /**
     * Constructor method for GetCustomerCategoriesRequest
     * @uses GetCustomerCategoriesRequest::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory|null
     */
    public function getMidocoCustomerCategory(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * Set MidocoCustomerCategory value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCustomerCategoriesRequest
     */
    public function setMidocoCustomerCategory(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory = null): self
    {
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
}