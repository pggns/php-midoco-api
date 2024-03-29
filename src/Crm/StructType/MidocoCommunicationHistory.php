<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCommunicationHistory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCommunicationHistory extends CommunicationHistoryDTO
{
    /**
     * The Ids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $Ids = null;
    /**
     * Constructor method for MidocoCommunicationHistory
     * @uses MidocoCommunicationHistory::setIds()
     * @param int[] $ids
     */
    public function __construct(?array $ids = null)
    {
        $this
            ->setIds($ids);
    }
    /**
     * Get Ids value
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->Ids;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForArrayConstraintFromSetIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCommunicationHistoryIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($midocoCommunicationHistoryIdsItem) || ctype_digit($midocoCommunicationHistoryIdsItem))) {
                $invalidValues[] = is_object($midocoCommunicationHistoryIdsItem) ? get_class($midocoCommunicationHistoryIdsItem) : sprintf('%s(%s)', gettype($midocoCommunicationHistoryIdsItem), var_export($midocoCommunicationHistoryIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ids property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Ids value
     * @throws InvalidArgumentException
     * @param int[] $ids
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory
     */
    public function setIds(?array $ids = null): self
    {
        // validation for constraint: array
        if ('' !== ($idsArrayErrorMessage = self::validateIdsForArrayConstraintFromSetIds($ids))) {
            throw new InvalidArgumentException($idsArrayErrorMessage, __LINE__);
        }
        $this->Ids = $ids;
        
        return $this;
    }
    /**
     * Add item to Ids value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory
     */
    public function addToIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The Ids property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ids[] = $item;
        
        return $this;
    }
}
