<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: voidBillingDocument --- void a billing document
 * @subpackage Structs
 */
class VoidBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    protected ?array $MidocoOnlinePaymentTransaction = null;
    /**
     * Constructor method for VoidBillingDocumentResponse
     * @uses VoidBillingDocumentResponse::setMidocoBillingDocument()
     * @uses VoidBillingDocumentResponse::setMidocoOnlinePaymentTransaction()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?array $midocoOnlinePaymentTransaction = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    public function getMidocoOnlinePaymentTransaction(): ?array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem) ? get_class($voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem), var_export($voidBillingDocumentResponseMidocoOnlinePaymentTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentResponse
     */
    public function setMidocoOnlinePaymentTransaction(?array $midocoOnlinePaymentTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentResponse
     */
    public function addToMidocoOnlinePaymentTransaction(\Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction[] = $item;
        
        return $this;
    }
}
