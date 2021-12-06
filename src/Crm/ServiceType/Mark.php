<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Mark ServiceType
 * @subpackage Services
 */
class Mark extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Mark
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named markUsedMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MarkUsedMidocoMandateRequest $paramMarkUsedMidocoMandateRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MarkUsedMandateResponse|bool
     */
    public function markUsedMidocoMandate(\Pggns\MidocoApi\Api\Crm\StructType\MarkUsedMidocoMandateRequest $paramMarkUsedMidocoMandateRequest)
    {
        try {
            $this->setResult($resultMarkUsedMidocoMandate = $this->getSoapClient()->__soapCall('markUsedMidocoMandate', [
                $paramMarkUsedMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkUsedMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markExportChangedCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MarkExportChangedCustomersRequest $paramMarkExportChangedCustomersRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MarkExportChangedCustomersResponse|bool
     */
    public function markExportChangedCustomers(\Pggns\MidocoApi\Api\Crm\StructType\MarkExportChangedCustomersRequest $paramMarkExportChangedCustomersRequest)
    {
        try {
            $this->setResult($resultMarkExportChangedCustomers = $this->getSoapClient()->__soapCall('markExportChangedCustomers', [
                $paramMarkExportChangedCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkExportChangedCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markVoidedCrmNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MarkVoidedCrmNoticeCommentRequest $paramMarkVoidedCrmNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MarkVoidedCrmNoticeCommentResponse|bool
     */
    public function markVoidedCrmNoticeComment(\Pggns\MidocoApi\Api\Crm\StructType\MarkVoidedCrmNoticeCommentRequest $paramMarkVoidedCrmNoticeCommentRequest)
    {
        try {
            $this->setResult($resultMarkVoidedCrmNoticeComment = $this->getSoapClient()->__soapCall('markVoidedCrmNoticeComment', [
                $paramMarkVoidedCrmNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkVoidedCrmNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MarkExportChangedCustomersResponse|\Pggns\MidocoApi\Api\Crm\StructType\MarkUsedMandateResponse|\Pggns\MidocoApi\Api\Crm\StructType\MarkVoidedCrmNoticeCommentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
