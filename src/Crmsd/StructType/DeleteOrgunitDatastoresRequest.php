<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrgunitDatastoresRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrgunitDatastoresRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDatastore
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoOrgunitDatastore
     * @var \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO[]
     */
    protected ?array $MidocoOrgunitDatastore = null;
    /**
     * Constructor method for DeleteOrgunitDatastoresRequest
     * @uses DeleteOrgunitDatastoresRequest::setMidocoOrgunitDatastore()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO[] $midocoOrgunitDatastore
     */
    public function __construct(?array $midocoOrgunitDatastore = null)
    {
        $this
            ->setMidocoOrgunitDatastore($midocoOrgunitDatastore);
    }
    /**
     * Get MidocoOrgunitDatastore value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO[]
     */
    public function getMidocoOrgunitDatastore(): ?array
    {
        return $this->MidocoOrgunitDatastore;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunitDatastore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitDatastore method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitDatastoreForArrayConstraintFromSetMidocoOrgunitDatastore(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) {
            // validation for constraint: itemType
            if (!$deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem instanceof \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO) {
                $invalidValues[] = is_object($deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) ? get_class($deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) : sprintf('%s(%s)', gettype($deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem), var_export($deleteOrgunitDatastoresRequestMidocoOrgunitDatastoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitDatastore property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO[] $midocoOrgunitDatastore
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteOrgunitDatastoresRequest
     */
    public function setMidocoOrgunitDatastore(?array $midocoOrgunitDatastore = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitDatastoreArrayErrorMessage = self::validateMidocoOrgunitDatastoreForArrayConstraintFromSetMidocoOrgunitDatastore($midocoOrgunitDatastore))) {
            throw new InvalidArgumentException($midocoOrgunitDatastoreArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitDatastore = $midocoOrgunitDatastore;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteOrgunitDatastoresRequest
     */
    public function addToMidocoOrgunitDatastore(\Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitDatastore property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DatastoreAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitDatastore[] = $item;
        
        return $this;
    }
}
