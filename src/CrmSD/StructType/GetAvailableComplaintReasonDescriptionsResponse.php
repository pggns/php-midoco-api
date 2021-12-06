<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableComplaintReasonDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getComplaintReasonDescriptions --- returns the list of complaint reason descriptions of a given complaint reason type
 * @subpackage Structs
 */
class GetAvailableComplaintReasonDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoComplaintReasonDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoComplaintReasonDescription
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO[]
     */
    protected ?array $MidocoComplaintReasonDescription = null;
    /**
     * Constructor method for GetAvailableComplaintReasonDescriptionsResponse
     * @uses GetAvailableComplaintReasonDescriptionsResponse::setMidocoComplaintReasonDescription()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO[] $midocoComplaintReasonDescription
     */
    public function __construct(?array $midocoComplaintReasonDescription = null)
    {
        $this
            ->setMidocoComplaintReasonDescription($midocoComplaintReasonDescription);
    }
    /**
     * Get MidocoComplaintReasonDescription value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO[]
     */
    public function getMidocoComplaintReasonDescription(): ?array
    {
        return $this->MidocoComplaintReasonDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoComplaintReasonDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoComplaintReasonDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoComplaintReasonDescriptionForArrayConstraintsFromSetMidocoComplaintReasonDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO) {
                $invalidValues[] = is_object($getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem) ? get_class($getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem), var_export($getAvailableComplaintReasonDescriptionsResponseMidocoComplaintReasonDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoComplaintReasonDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoComplaintReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO[] $midocoComplaintReasonDescription
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAvailableComplaintReasonDescriptionsResponse
     */
    public function setMidocoComplaintReasonDescription(?array $midocoComplaintReasonDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoComplaintReasonDescriptionArrayErrorMessage = self::validateMidocoComplaintReasonDescriptionForArrayConstraintsFromSetMidocoComplaintReasonDescription($midocoComplaintReasonDescription))) {
            throw new InvalidArgumentException($midocoComplaintReasonDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoComplaintReasonDescription = $midocoComplaintReasonDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoComplaintReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAvailableComplaintReasonDescriptionsResponse
     */
    public function addToMidocoComplaintReasonDescription(\Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoComplaintReasonDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\ComplaintReasonDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoComplaintReasonDescription[] = $item;
        
        return $this;
    }
}
