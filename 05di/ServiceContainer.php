<?php 
namespace di;

class ServiceContainer
{
    private $serviceInstances = [];
    private $servicesConfig;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->servicesConfig = [
            'mailer' => [
                'factory' => 'di\\MyMailerFactory::create',
                'dependencies' => []
            ],
            'newsletter' => [
                'factory' => 'di\\MyNewsletterFactory::generate',
                'dependencies' => ['mailer']
            ],
        ];
    }

    public function get(string $serviceName)
    {
        if (!key_exists($serviceName, $this->serviceInstances)){
            if (!key_exists($serviceName, $this->servicesConfig)){
                throw new \Exception('Ce service est inconnu');
            }
            $this->getDependencies($serviceName);
            $this->serviceInstances[$serviceName] = $this->callFactory($serviceName);
        }
        return $this->serviceInstances[$serviceName];
    }

    private function callFactory($serviceName)
    {
        $config = $this->servicesConfig[$serviceName];
        list($className, $method) = explode('::', $config['factory']);

        $arguments = array_intersect_key(
            $this->serviceInstances,
            array_flip($this->servicesConfig[$serviceName]['dependencies'])
        );

        return call_user_func_array([new $className(), $method], $arguments);
    }

    private function getDependencies($serviceName)
    {
        foreach ($this->servicesConfig[$serviceName]['dependencies'] as $dependency) {
            $this->get($dependency);
        }
    }
}