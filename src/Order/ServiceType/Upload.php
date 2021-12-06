<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Upload
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named uploadPaymentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\UploadPaymentDataRequest $paramUploadPaymentDataRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\UploadPaymentDataResponse|bool
     */
    public function uploadPaymentData(\Pggns\MidocoApi\Api\Order\StructType\UploadPaymentDataRequest $paramUploadPaymentDataRequest)
    {
        try {
            $this->setResult($resultUploadPaymentData = $this->getSoapClient()->__soapCall('uploadPaymentData', [
                $paramUploadPaymentDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadPaymentData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named uploadBSPZip
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\UploadBSPZipRequest $paramUploadBSPZipRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\UploadBSPZipResponse|bool
     */
    public function uploadBSPZip(\Pggns\MidocoApi\Api\Order\StructType\UploadBSPZipRequest $paramUploadBSPZipRequest)
    {
        try {
            $this->setResult($resultUploadBSPZip = $this->getSoapClient()->__soapCall('uploadBSPZip', [
                $paramUploadBSPZipRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadBSPZip;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\UploadBSPZipResponse|\Pggns\MidocoApi\Api\Order\StructType\UploadPaymentDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
