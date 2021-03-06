<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactEntryWithSource StructType
 * @subpackage Structs
 */
class MidocoContactEntryWithSource extends AbstractStructBase
{
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType $MidocoContactEntry = null;
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource[]
     */
    protected ?array $MidocoContactSource = null;
    /**
     * Constructor method for MidocoContactEntryWithSource
     * @uses MidocoContactEntryWithSource::setMidocoContactEntry()
     * @uses MidocoContactEntryWithSource::setMidocoContactSource()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType $midocoContactEntry
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource[] $midocoContactSource
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType $midocoContactEntry = null, ?array $midocoContactSource = null)
    {
        $this
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoContactSource($midocoContactSource);
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType|null
     */
    public function getMidocoContactEntry(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType
    {
        return $this->MidocoContactEntry;
    }
    /**
     * Set MidocoContactEntry value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType $midocoContactEntry
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryWithSource
     */
    public function setMidocoContactEntry(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryType $midocoContactEntry = null): self
    {
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource[]
     */
    public function getMidocoContactSource(): ?array
    {
        return $this->MidocoContactSource;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactSourceForArrayConstraintsFromSetMidocoContactSource(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoContactEntryWithSourceMidocoContactSourceItem) {
            // validation for constraint: itemType
            if (!$midocoContactEntryWithSourceMidocoContactSourceItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource) {
                $invalidValues[] = is_object($midocoContactEntryWithSourceMidocoContactSourceItem) ? get_class($midocoContactEntryWithSourceMidocoContactSourceItem) : sprintf('%s(%s)', gettype($midocoContactEntryWithSourceMidocoContactSourceItem), var_export($midocoContactEntryWithSourceMidocoContactSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource[] $midocoContactSource
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryWithSource
     */
    public function setMidocoContactSource(?array $midocoContactSource = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactSourceArrayErrorMessage = self::validateMidocoContactSourceForArrayConstraintsFromSetMidocoContactSource($midocoContactSource))) {
            throw new InvalidArgumentException($midocoContactSourceArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
    /**
     * Add item to MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactEntryWithSource
     */
    public function addToMidocoContactSource(\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource) {
            throw new InvalidArgumentException(sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactSource[] = $item;
        
        return $this;
    }
}
