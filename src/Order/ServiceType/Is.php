<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Is
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named isOrderTotallyCancelled
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\IsOrderTotallyCancelledRequest $paramIsOrderTotallyCancelledRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\IsOrderTotallyCancelledResponse|bool
     */
    public function isOrderTotallyCancelled(\Pggns\MidocoApi\Api\Order\StructType\IsOrderTotallyCancelledRequest $paramIsOrderTotallyCancelledRequest)
    {
        try {
            $this->setResult($resultIsOrderTotallyCancelled = $this->getSoapClient()->__soapCall('isOrderTotallyCancelled', [
                $paramIsOrderTotallyCancelledRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultIsOrderTotallyCancelled;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named isPrintRequiredForPassengers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersRequest $paramIsPrintRequiredForPassengersRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersResponse|bool
     */
    public function isPrintRequiredForPassengers(\Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersRequest $paramIsPrintRequiredForPassengersRequest)
    {
        try {
            $this->setResult($resultIsPrintRequiredForPassengers = $this->getSoapClient()->__soapCall('isPrintRequiredForPassengers', [
                $paramIsPrintRequiredForPassengersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultIsPrintRequiredForPassengers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\IsOrderTotallyCancelledResponse|\Pggns\MidocoApi\Api\Order\StructType\IsPrintRequiredForPassengersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
