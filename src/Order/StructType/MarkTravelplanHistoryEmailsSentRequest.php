<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkTravelplanHistoryEmailsSentRequest StructType
 * @subpackage Structs
 */
class MarkTravelplanHistoryEmailsSentRequest extends AbstractStructBase
{
    /**
     * The historyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $historyId = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for MarkTravelplanHistoryEmailsSentRequest
     * @uses MarkTravelplanHistoryEmailsSentRequest::setHistoryId()
     * @uses MarkTravelplanHistoryEmailsSentRequest::setMidocoMailMessage()
     * @param int[] $historyId
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?array $historyId = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setHistoryId($historyId)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get historyId value
     * @return int[]
     */
    public function getHistoryId(): ?array
    {
        return $this->historyId;
    }
    /**
     * This method is responsible for validating the values passed to the setHistoryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistoryId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistoryIdForArrayConstraintsFromSetHistoryId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $markTravelplanHistoryEmailsSentRequestHistoryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($markTravelplanHistoryEmailsSentRequestHistoryIdItem) || ctype_digit($markTravelplanHistoryEmailsSentRequestHistoryIdItem))) {
                $invalidValues[] = is_object($markTravelplanHistoryEmailsSentRequestHistoryIdItem) ? get_class($markTravelplanHistoryEmailsSentRequestHistoryIdItem) : sprintf('%s(%s)', gettype($markTravelplanHistoryEmailsSentRequestHistoryIdItem), var_export($markTravelplanHistoryEmailsSentRequestHistoryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The historyId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set historyId value
     * @throws InvalidArgumentException
     * @param int[] $historyId
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentRequest
     */
    public function setHistoryId(?array $historyId = null): self
    {
        // validation for constraint: array
        if ('' !== ($historyIdArrayErrorMessage = self::validateHistoryIdForArrayConstraintsFromSetHistoryId($historyId))) {
            throw new InvalidArgumentException($historyIdArrayErrorMessage, __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
    /**
     * Add item to historyId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentRequest
     */
    public function addToHistoryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The historyId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->historyId[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
