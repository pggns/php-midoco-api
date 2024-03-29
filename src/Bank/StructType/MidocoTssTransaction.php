<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTssTransaction StructType
 * Meta information extracted from the WSDL
 * - documentation: A private DTO for TSS transactions used in conjunction with CashBookSignature; has to do with KSichV.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTssTransaction extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The transaction id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The tssId
     * Meta information extracted from the WSDL
     * - documentation: The TSS id
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The clientId
     * Meta information extracted from the WSDL
     * - documentation: The TSS Client id
     * @var string|null
     */
    protected ?string $clientId = null;
    /**
     * The lastRevision
     * Meta information extracted from the WSDL
     * - documentation: The lastRevision as returned by the API
     * @var int|null
     */
    protected ?int $lastRevision = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - documentation: The transaction status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The turnoverId
     * Meta information extracted from the WSDL
     * - documentation: The CashTurnoverJournals turnoverId
     * @var int|null
     */
    protected ?int $turnoverId = null;
    /**
     * The json
     * Meta information extracted from the WSDL
     * - documentation: The API response of the start transaction call
     * @var string|null
     */
    protected ?string $json = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - documentation: The unit name
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The receiptType
     * Meta information extracted from the WSDL
     * - documentation: The receiptType. One of: "BILLING", "RECEIPT"
     * @var string|null
     */
    protected ?string $receiptType = null;
    /**
     * The receiptDate
     * Meta information extracted from the WSDL
     * - documentation: The receipt date
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The transactionNumber
     * Meta information extracted from the WSDL
     * - documentation: The transaction number provided by the API
     * @var int|null
     */
    protected ?int $transactionNumber = null;
    /**
     * The clientSerialNumber
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the ERS - see 7.5. BSI TR-03153
     * @var string|null
     */
    protected ?string $clientSerialNumber = null;
    /**
     * The signature
     * Meta information extracted from the WSDL
     * - documentation: The transaction signature generated by the TSS
     * @var string|null
     */
    protected ?string $signature = null;
    /**
     * The qrCodeData
     * Meta information extracted from the WSDL
     * - documentation: Data of the QR Code according to Appendix I of DSFinV-K
     * @var string|null
     */
    protected ?string $qrCodeData = null;
    /**
     * The startTime
     * Meta information extracted from the WSDL
     * - documentation: The transaction start time
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The endTime
     * Meta information extracted from the WSDL
     * - documentation: The transaction end time
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The logTime
     * Meta information extracted from the WSDL
     * - documentation: The log timestamp
     * @var string|null
     */
    protected ?string $logTime = null;
    /**
     * The failed
     * Meta information extracted from the WSDL
     * - documentation: true if the API call failed
     * @var bool|null
     */
    protected ?bool $failed = null;
    /**
     * The error_message
     * Meta information extracted from the WSDL
     * - documentation: The failure reason
     * @var string|null
     */
    protected ?string $error_message = null;
    /**
     * Constructor method for MidocoTssTransaction
     * @uses MidocoTssTransaction::setId()
     * @uses MidocoTssTransaction::setTssId()
     * @uses MidocoTssTransaction::setClientId()
     * @uses MidocoTssTransaction::setLastRevision()
     * @uses MidocoTssTransaction::setStatus()
     * @uses MidocoTssTransaction::setTurnoverId()
     * @uses MidocoTssTransaction::setJson()
     * @uses MidocoTssTransaction::setUnitName()
     * @uses MidocoTssTransaction::setReceiptType()
     * @uses MidocoTssTransaction::setReceiptDate()
     * @uses MidocoTssTransaction::setTransactionNumber()
     * @uses MidocoTssTransaction::setClientSerialNumber()
     * @uses MidocoTssTransaction::setSignature()
     * @uses MidocoTssTransaction::setQrCodeData()
     * @uses MidocoTssTransaction::setStartTime()
     * @uses MidocoTssTransaction::setEndTime()
     * @uses MidocoTssTransaction::setLogTime()
     * @uses MidocoTssTransaction::setFailed()
     * @uses MidocoTssTransaction::setError_message()
     * @param string $id
     * @param string $tssId
     * @param string $clientId
     * @param int $lastRevision
     * @param string $status
     * @param int $turnoverId
     * @param string $json
     * @param string $unitName
     * @param string $receiptType
     * @param string $receiptDate
     * @param int $transactionNumber
     * @param string $clientSerialNumber
     * @param string $signature
     * @param string $qrCodeData
     * @param string $startTime
     * @param string $endTime
     * @param string $logTime
     * @param bool $failed
     * @param string $error_message
     */
    public function __construct(?string $id = null, ?string $tssId = null, ?string $clientId = null, ?int $lastRevision = null, ?string $status = null, ?int $turnoverId = null, ?string $json = null, ?string $unitName = null, ?string $receiptType = null, ?string $receiptDate = null, ?int $transactionNumber = null, ?string $clientSerialNumber = null, ?string $signature = null, ?string $qrCodeData = null, ?string $startTime = null, ?string $endTime = null, ?string $logTime = null, ?bool $failed = null, ?string $error_message = null)
    {
        $this
            ->setId($id)
            ->setTssId($tssId)
            ->setClientId($clientId)
            ->setLastRevision($lastRevision)
            ->setStatus($status)
            ->setTurnoverId($turnoverId)
            ->setJson($json)
            ->setUnitName($unitName)
            ->setReceiptType($receiptType)
            ->setReceiptDate($receiptDate)
            ->setTransactionNumber($transactionNumber)
            ->setClientSerialNumber($clientSerialNumber)
            ->setSignature($signature)
            ->setQrCodeData($qrCodeData)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setLogTime($logTime)
            ->setFailed($failed)
            ->setError_message($error_message);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
        return $this;
    }
    /**
     * Get lastRevision value
     * @return int|null
     */
    public function getLastRevision(): ?int
    {
        return $this->lastRevision;
    }
    /**
     * Set lastRevision value
     * @param int $lastRevision
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setLastRevision(?int $lastRevision = null): self
    {
        // validation for constraint: int
        if (!is_null($lastRevision) && !(is_int($lastRevision) || ctype_digit($lastRevision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastRevision, true), gettype($lastRevision)), __LINE__);
        }
        $this->lastRevision = $lastRevision;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get turnoverId value
     * @return int|null
     */
    public function getTurnoverId(): ?int
    {
        return $this->turnoverId;
    }
    /**
     * Set turnoverId value
     * @param int $turnoverId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setTurnoverId(?int $turnoverId = null): self
    {
        // validation for constraint: int
        if (!is_null($turnoverId) && !(is_int($turnoverId) || ctype_digit($turnoverId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($turnoverId, true), gettype($turnoverId)), __LINE__);
        }
        $this->turnoverId = $turnoverId;
        
        return $this;
    }
    /**
     * Get json value
     * @return string|null
     */
    public function getJson(): ?string
    {
        return $this->json;
    }
    /**
     * Set json value
     * @param string $json
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setJson(?string $json = null): self
    {
        // validation for constraint: string
        if (!is_null($json) && !is_string($json)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($json, true), gettype($json)), __LINE__);
        }
        $this->json = $json;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get receiptType value
     * @return string|null
     */
    public function getReceiptType(): ?string
    {
        return $this->receiptType;
    }
    /**
     * Set receiptType value
     * @param string $receiptType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setReceiptType(?string $receiptType = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptType) && !is_string($receiptType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptType, true), gettype($receiptType)), __LINE__);
        }
        $this->receiptType = $receiptType;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get transactionNumber value
     * @return int|null
     */
    public function getTransactionNumber(): ?int
    {
        return $this->transactionNumber;
    }
    /**
     * Set transactionNumber value
     * @param int $transactionNumber
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setTransactionNumber(?int $transactionNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNumber) && !(is_int($transactionNumber) || ctype_digit($transactionNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNumber, true), gettype($transactionNumber)), __LINE__);
        }
        $this->transactionNumber = $transactionNumber;
        
        return $this;
    }
    /**
     * Get clientSerialNumber value
     * @return string|null
     */
    public function getClientSerialNumber(): ?string
    {
        return $this->clientSerialNumber;
    }
    /**
     * Set clientSerialNumber value
     * @param string $clientSerialNumber
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setClientSerialNumber(?string $clientSerialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($clientSerialNumber) && !is_string($clientSerialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSerialNumber, true), gettype($clientSerialNumber)), __LINE__);
        }
        $this->clientSerialNumber = $clientSerialNumber;
        
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        
        return $this;
    }
    /**
     * Get qrCodeData value
     * @return string|null
     */
    public function getQrCodeData(): ?string
    {
        return $this->qrCodeData;
    }
    /**
     * Set qrCodeData value
     * @param string $qrCodeData
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setQrCodeData(?string $qrCodeData = null): self
    {
        // validation for constraint: string
        if (!is_null($qrCodeData) && !is_string($qrCodeData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrCodeData, true), gettype($qrCodeData)), __LINE__);
        }
        $this->qrCodeData = $qrCodeData;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
        return $this;
    }
    /**
     * Get logTime value
     * @return string|null
     */
    public function getLogTime(): ?string
    {
        return $this->logTime;
    }
    /**
     * Set logTime value
     * @param string $logTime
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setLogTime(?string $logTime = null): self
    {
        // validation for constraint: string
        if (!is_null($logTime) && !is_string($logTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logTime, true), gettype($logTime)), __LINE__);
        }
        $this->logTime = $logTime;
        
        return $this;
    }
    /**
     * Get failed value
     * @return bool|null
     */
    public function getFailed(): ?bool
    {
        return $this->failed;
    }
    /**
     * Set failed value
     * @param bool $failed
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setFailed(?bool $failed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($failed) && !is_bool($failed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($failed, true), gettype($failed)), __LINE__);
        }
        $this->failed = $failed;
        
        return $this;
    }
    /**
     * Get error_message value
     * @return string|null
     */
    public function getError_message(): ?string
    {
        return $this->{'error-message'};
    }
    /**
     * Set error_message value
     * @param string $error_message
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTssTransaction
     */
    public function setError_message(?string $error_message = null): self
    {
        // validation for constraint: string
        if (!is_null($error_message) && !is_string($error_message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_message, true), gettype($error_message)), __LINE__);
        }
        $this->error_message = $this->{'error-message'} = $error_message;
        
        return $this;
    }
}
