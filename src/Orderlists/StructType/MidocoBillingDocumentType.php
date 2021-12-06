<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDocumentType StructType
 * @subpackage Structs
 */
class MidocoBillingDocumentType extends BillingDocumentDTO
{
    /**
     * The MidocoBillingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingRemark
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO[]
     */
    protected ?array $MidocoBillingRemark = null;
    /**
     * The MidocoBillingAttribute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingAttribute
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO $MidocoBillingAttribute = null;
    /**
     * The MidocoBillingVatCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingVatCalculation
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation[]
     */
    protected ?array $MidocoBillingVatCalculation = null;
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType[]
     */
    protected ?array $MidocoBillingPosition = null;
    /**
     * The MidocoBillingOnlinePayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingOnlinePayment
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment $MidocoBillingOnlinePayment = null;
    /**
     * The MidocoBillingAdvisedPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingAdvisedPayment
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO $MidocoBillingAdvisedPayment = null;
    /**
     * The MidocoOrderBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderBilling
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling[]
     */
    protected ?array $MidocoOrderBilling = null;
    /**
     * The MidocoBillingPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPrint
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO[]
     */
    protected ?array $MidocoBillingPrint = null;
    /**
     * The MidocoEinvoiceDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoEinvoiceDocument
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument $MidocoEinvoiceDocument = null;
    /**
     * The MidocoBillingEinvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoBillingEinvoice
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice $MidocoBillingEinvoice = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The dbiStatus
     * @var int|null
     */
    protected ?int $dbiStatus = null;
    /**
     * The cancellationDocNo
     * @var int|null
     */
    protected ?int $cancellationDocNo = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The isDraft
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * Constructor method for MidocoBillingDocumentType
     * @uses MidocoBillingDocumentType::setMidocoBillingRemark()
     * @uses MidocoBillingDocumentType::setMidocoBillingAttribute()
     * @uses MidocoBillingDocumentType::setMidocoBillingVatCalculation()
     * @uses MidocoBillingDocumentType::setMidocoBillingPosition()
     * @uses MidocoBillingDocumentType::setMidocoBillingOnlinePayment()
     * @uses MidocoBillingDocumentType::setMidocoBillingAdvisedPayment()
     * @uses MidocoBillingDocumentType::setMidocoOrderBilling()
     * @uses MidocoBillingDocumentType::setMidocoBillingPrint()
     * @uses MidocoBillingDocumentType::setMidocoEinvoiceDocument()
     * @uses MidocoBillingDocumentType::setMidocoBillingEinvoice()
     * @uses MidocoBillingDocumentType::setUnitAlias()
     * @uses MidocoBillingDocumentType::setDbiStatus()
     * @uses MidocoBillingDocumentType::setCancellationDocNo()
     * @uses MidocoBillingDocumentType::setConfirmationGroup()
     * @uses MidocoBillingDocumentType::setStoreUntil()
     * @uses MidocoBillingDocumentType::setIsDraft()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO[] $midocoBillingRemark
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO $midocoBillingAttribute
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling[] $midocoOrderBilling
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO[] $midocoBillingPrint
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice $midocoBillingEinvoice
     * @param string $unitAlias
     * @param int $dbiStatus
     * @param int $cancellationDocNo
     * @param string $confirmationGroup
     * @param string $storeUntil
     * @param bool $isDraft
     */
    public function __construct(?array $midocoBillingRemark = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO $midocoBillingAttribute = null, ?array $midocoBillingVatCalculation = null, ?array $midocoBillingPosition = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null, ?array $midocoOrderBilling = null, ?array $midocoBillingPrint = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice $midocoBillingEinvoice = null, ?string $unitAlias = null, ?int $dbiStatus = null, ?int $cancellationDocNo = null, ?string $confirmationGroup = null, ?string $storeUntil = null, ?bool $isDraft = false)
    {
        $this
            ->setMidocoBillingRemark($midocoBillingRemark)
            ->setMidocoBillingAttribute($midocoBillingAttribute)
            ->setMidocoBillingVatCalculation($midocoBillingVatCalculation)
            ->setMidocoBillingPosition($midocoBillingPosition)
            ->setMidocoBillingOnlinePayment($midocoBillingOnlinePayment)
            ->setMidocoBillingAdvisedPayment($midocoBillingAdvisedPayment)
            ->setMidocoOrderBilling($midocoOrderBilling)
            ->setMidocoBillingPrint($midocoBillingPrint)
            ->setMidocoEinvoiceDocument($midocoEinvoiceDocument)
            ->setMidocoBillingEinvoice($midocoBillingEinvoice)
            ->setUnitAlias($unitAlias)
            ->setDbiStatus($dbiStatus)
            ->setCancellationDocNo($cancellationDocNo)
            ->setConfirmationGroup($confirmationGroup)
            ->setStoreUntil($storeUntil)
            ->setIsDraft($isDraft);
    }
    /**
     * Get MidocoBillingRemark value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO[]
     */
    public function getMidocoBillingRemark(): ?array
    {
        return $this->MidocoBillingRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingRemarkForArrayConstraintsFromSetMidocoBillingRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingRemarkItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingRemarkItem) ? get_class($midocoBillingDocumentTypeMidocoBillingRemarkItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingRemarkItem), var_export($midocoBillingDocumentTypeMidocoBillingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO[] $midocoBillingRemark
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingRemark(?array $midocoBillingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingRemarkArrayErrorMessage = self::validateMidocoBillingRemarkForArrayConstraintsFromSetMidocoBillingRemark($midocoBillingRemark))) {
            throw new InvalidArgumentException($midocoBillingRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingRemark = $midocoBillingRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingRemark(\Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingAttribute value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO|null
     */
    public function getMidocoBillingAttribute(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO
    {
        return $this->MidocoBillingAttribute;
    }
    /**
     * Set MidocoBillingAttribute value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO $midocoBillingAttribute
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingAttribute(?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAttributeDTO $midocoBillingAttribute = null): self
    {
        $this->MidocoBillingAttribute = $midocoBillingAttribute;
        
        return $this;
    }
    /**
     * Get MidocoBillingVatCalculation value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation[]
     */
    public function getMidocoBillingVatCalculation(): ?array
    {
        return $this->MidocoBillingVatCalculation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingVatCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingVatCalculation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingVatCalculationForArrayConstraintsFromSetMidocoBillingVatCalculation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingVatCalculationItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingVatCalculationItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingVatCalculationItem) ? get_class($midocoBillingDocumentTypeMidocoBillingVatCalculationItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingVatCalculationItem), var_export($midocoBillingDocumentTypeMidocoBillingVatCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingVatCalculation(?array $midocoBillingVatCalculation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingVatCalculationArrayErrorMessage = self::validateMidocoBillingVatCalculationForArrayConstraintsFromSetMidocoBillingVatCalculation($midocoBillingVatCalculation))) {
            throw new InvalidArgumentException($midocoBillingVatCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingVatCalculation = $midocoBillingVatCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingVatCalculation(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingVatCalculation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingVatCalculation[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType[]
     */
    public function getMidocoBillingPosition(): ?array
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingPositionItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingPositionItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingPositionItem) ? get_class($midocoBillingDocumentTypeMidocoBillingPositionItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingPositionItem), var_export($midocoBillingDocumentTypeMidocoBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingPosition(?array $midocoBillingPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionArrayErrorMessage = self::validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition($midocoBillingPosition))) {
            throw new InvalidArgumentException($midocoBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingPosition(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingPositionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingOnlinePayment value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment|null
     */
    public function getMidocoBillingOnlinePayment(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment
    {
        return $this->MidocoBillingOnlinePayment;
    }
    /**
     * Set MidocoBillingOnlinePayment value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingOnlinePayment(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null): self
    {
        $this->MidocoBillingOnlinePayment = $midocoBillingOnlinePayment;
        
        return $this;
    }
    /**
     * Get MidocoBillingAdvisedPayment value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO|null
     */
    public function getMidocoBillingAdvisedPayment(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO
    {
        return $this->MidocoBillingAdvisedPayment;
    }
    /**
     * Set MidocoBillingAdvisedPayment value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingAdvisedPayment(?\Pggns\MidocoApi\Api\Orderlists\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null): self
    {
        $this->MidocoBillingAdvisedPayment = $midocoBillingAdvisedPayment;
        
        return $this;
    }
    /**
     * Get MidocoOrderBilling value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling[]
     */
    public function getMidocoOrderBilling(): ?array
    {
        return $this->MidocoOrderBilling;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderBilling method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderBillingForArrayConstraintsFromSetMidocoOrderBilling(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoOrderBillingItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoOrderBillingItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoOrderBillingItem) ? get_class($midocoBillingDocumentTypeMidocoOrderBillingItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoOrderBillingItem), var_export($midocoBillingDocumentTypeMidocoOrderBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderBilling property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling[] $midocoOrderBilling
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoOrderBilling(?array $midocoOrderBilling = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderBillingArrayErrorMessage = self::validateMidocoOrderBillingForArrayConstraintsFromSetMidocoOrderBilling($midocoOrderBilling))) {
            throw new InvalidArgumentException($midocoOrderBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderBilling = $midocoOrderBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoOrderBilling(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderBilling property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrderBilling, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderBilling[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingPrint value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO[]
     */
    public function getMidocoBillingPrint(): ?array
    {
        return $this->MidocoBillingPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingPrintItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingPrintItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingPrintItem) ? get_class($midocoBillingDocumentTypeMidocoBillingPrintItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingPrintItem), var_export($midocoBillingDocumentTypeMidocoBillingPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO[] $midocoBillingPrint
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingPrint(?array $midocoBillingPrint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPrintArrayErrorMessage = self::validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint($midocoBillingPrint))) {
            throw new InvalidArgumentException($midocoBillingPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPrint = $midocoBillingPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingPrint(\Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\BillingPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPrint[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoEinvoiceDocument value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument|null
     */
    public function getMidocoEinvoiceDocument(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument
    {
        return $this->MidocoEinvoiceDocument;
    }
    /**
     * Set MidocoEinvoiceDocument value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoEinvoiceDocument(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null): self
    {
        $this->MidocoEinvoiceDocument = $midocoEinvoiceDocument;
        
        return $this;
    }
    /**
     * Get MidocoBillingEinvoice value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice|null
     */
    public function getMidocoBillingEinvoice(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice
    {
        return $this->MidocoBillingEinvoice;
    }
    /**
     * Set MidocoBillingEinvoice value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice $midocoBillingEinvoice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingEinvoice(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingEinvoice $midocoBillingEinvoice = null): self
    {
        $this->MidocoBillingEinvoice = $midocoBillingEinvoice;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
        return $this;
    }
    /**
     * Get dbiStatus value
     * @return int|null
     */
    public function getDbiStatus(): ?int
    {
        return $this->dbiStatus;
    }
    /**
     * Set dbiStatus value
     * @param int $dbiStatus
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setDbiStatus(?int $dbiStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($dbiStatus) && !(is_int($dbiStatus) || ctype_digit($dbiStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbiStatus, true), gettype($dbiStatus)), __LINE__);
        }
        $this->dbiStatus = $dbiStatus;
        
        return $this;
    }
    /**
     * Get cancellationDocNo value
     * @return int|null
     */
    public function getCancellationDocNo(): ?int
    {
        return $this->cancellationDocNo;
    }
    /**
     * Set cancellationDocNo value
     * @param int $cancellationDocNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setCancellationDocNo(?int $cancellationDocNo = null): self
    {
        // validation for constraint: int
        if (!is_null($cancellationDocNo) && !(is_int($cancellationDocNo) || ctype_digit($cancellationDocNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cancellationDocNo, true), gettype($cancellationDocNo)), __LINE__);
        }
        $this->cancellationDocNo = $cancellationDocNo;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get isDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }
    /**
     * Set isDraft value
     * @param bool $isDraft
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDocumentType
     */
    public function setIsDraft(?bool $isDraft = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->isDraft = $isDraft;
        
        return $this;
    }
}