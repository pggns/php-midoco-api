<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\WorkflowSD\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionResponse|bool
     */
    public function deleteMidocoTaskDefinition(\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinition = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinition', [
                $paramDeleteMidocoTaskDefinitionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskPriorityResponse|bool
     */
    public function deleteMidocoTaskPriority(\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskPriority = $this->getSoapClient()->__soapCall('deleteMidocoTaskPriority', [
                $paramDeleteMidocoTaskPriorityRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function deleteMidocoTaskDefinitionDescription(\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinitionDescription', [
                $paramDeleteMidocoTaskDefinitionDescriptionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueRequest $paramDeleteMidocoTaskQueueRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueResponse|bool
     */
    public function deleteMidocoTaskQueue(\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueRequest $paramDeleteMidocoTaskQueueRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskQueue = $this->getSoapClient()->__soapCall('deleteMidocoTaskQueue', [
                $paramDeleteMidocoTaskQueueRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTaskView
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewRequest $paramDeleteTaskViewRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewResponse|bool
     */
    public function deleteTaskView(\Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewRequest $paramDeleteTaskViewRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultDeleteTaskView = $this->getSoapClient()->__soapCall('deleteTaskView', [
                $paramDeleteTaskViewRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTaskView;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskPriorityResponse|\Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueResponse|\Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
