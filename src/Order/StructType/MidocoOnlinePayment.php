<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePayment StructType
 * @subpackage Structs
 */
class MidocoOnlinePayment extends OnlinePaymentDTO
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: crm:MidocoCcToken
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken[]
     */
    protected ?array $MidocoCcToken = null;
    /**
     * The cvc
     * Meta information extracted from the WSDL
     * - documentation: this field won't be saved
     * @var string|null
     */
    protected ?string $cvc = null;
    /**
     * Constructor method for MidocoOnlinePayment
     * @uses MidocoOnlinePayment::setMidocoCcToken()
     * @uses MidocoOnlinePayment::setCvc()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @param string $cvc
     */
    public function __construct(?array $midocoCcToken = null, ?string $cvc = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken)
            ->setCvc($cvc);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): ?array
    {
        return $this->MidocoCcToken;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenForArrayConstraintsFromSetMidocoCcToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOnlinePaymentMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$midocoOnlinePaymentMidocoCcTokenItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($midocoOnlinePaymentMidocoCcTokenItem) ? get_class($midocoOnlinePaymentMidocoCcTokenItem) : sprintf('%s(%s)', gettype($midocoOnlinePaymentMidocoCcTokenItem), var_export($midocoOnlinePaymentMidocoCcTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment
     */
    public function setMidocoCcToken(?array $midocoCcToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenArrayErrorMessage = self::validateMidocoCcTokenForArrayConstraintsFromSetMidocoCcToken($midocoCcToken))) {
            throw new InvalidArgumentException($midocoCcTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment
     */
    public function addToMidocoCcToken(\Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken) {
            throw new InvalidArgumentException(sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCcToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcToken[] = $item;
        
        return $this;
    }
    /**
     * Get cvc value
     * @return string|null
     */
    public function getCvc(): ?string
    {
        return $this->cvc;
    }
    /**
     * Set cvc value
     * @param string $cvc
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment
     */
    public function setCvc(?string $cvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cvc) && !is_string($cvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvc, true), gettype($cvc)), __LINE__);
        }
        $this->cvc = $cvc;
        
        return $this;
    }
}
