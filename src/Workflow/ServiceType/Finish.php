<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Finish ServiceType
 * @subpackage Services
 */
class Finish extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Workflow\ServiceType\Finish
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named finishTask
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\FinishTaskRequest $paramFinishTaskRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\FinishTaskResponse|bool
     */
    public function finishTask(\Pggns\MidocoApi\Api\Workflow\StructType\FinishTaskRequest $paramFinishTaskRequest)
    {
        try {
            $this->setResult($resultFinishTask = $this->getSoapClient()->__soapCall('finishTask', [
                $paramFinishTaskRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\FinishTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
