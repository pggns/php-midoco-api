<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recalculate ServiceType
 * @subpackage Services
 */
class Recalculate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Recalculate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named recalculateTravelNoMargin
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\RecalculateTravelNoMarginRequest $paramRecalculateTravelNoMarginRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\RecalculateTravelNoMarginResponse|bool
     */
    public function recalculateTravelNoMargin(\Pggns\MidocoApi\Api\Order\StructType\RecalculateTravelNoMarginRequest $paramRecalculateTravelNoMarginRequest)
    {
        try {
            $this->setResult($resultRecalculateTravelNoMargin = $this->getSoapClient()->__soapCall('recalculateTravelNoMargin', [
                $paramRecalculateTravelNoMarginRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRecalculateTravelNoMargin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\RecalculateTravelNoMarginResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
