<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRawOrderRequest StructType
 * @subpackage Structs
 */
class SaveRawOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice[]
     */
    protected ?array $MidocoOrderNotice = null;
    /**
     * The MidocoOrderPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderPayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[]
     */
    protected ?array $MidocoOrderPayment = null;
    /**
     * Constructor method for SaveRawOrderRequest
     * @uses SaveRawOrderRequest::setMidocoOrder()
     * @uses SaveRawOrderRequest::setMidocoOrderNotice()
     * @uses SaveRawOrderRequest::setMidocoOrderPayment()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null, ?array $midocoOrderNotice = null, ?array $midocoOrderPayment = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setMidocoOrderPayment($midocoOrderPayment);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice[]
     */
    public function getMidocoOrderNotice(): ?array
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveRawOrderRequestMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$saveRawOrderRequestMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($saveRawOrderRequestMidocoOrderNoticeItem) ? get_class($saveRawOrderRequestMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($saveRawOrderRequestMidocoOrderNoticeItem), var_export($saveRawOrderRequestMidocoOrderNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrderNotice(?array $midocoOrderNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeArrayErrorMessage = self::validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice($midocoOrderNotice))) {
            throw new InvalidArgumentException($midocoOrderNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawOrderRequest
     */
    public function addToMidocoOrderNotice(\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[]
     */
    public function getMidocoOrderPayment(): ?array
    {
        return $this->MidocoOrderPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderPaymentForArrayConstraintsFromSetMidocoOrderPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveRawOrderRequestMidocoOrderPaymentItem) {
            // validation for constraint: itemType
            if (!$saveRawOrderRequestMidocoOrderPaymentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment) {
                $invalidValues[] = is_object($saveRawOrderRequestMidocoOrderPaymentItem) ? get_class($saveRawOrderRequestMidocoOrderPaymentItem) : sprintf('%s(%s)', gettype($saveRawOrderRequestMidocoOrderPaymentItem), var_export($saveRawOrderRequestMidocoOrderPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrderPayment(?array $midocoOrderPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderPaymentArrayErrorMessage = self::validateMidocoOrderPaymentForArrayConstraintsFromSetMidocoOrderPayment($midocoOrderPayment))) {
            throw new InvalidArgumentException($midocoOrderPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderPayment = $midocoOrderPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawOrderRequest
     */
    public function addToMidocoOrderPayment(\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderPayment[] = $item;
        
        return $this;
    }
}
