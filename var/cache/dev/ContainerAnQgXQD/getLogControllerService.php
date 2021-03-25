<?php

namespace ContainerAnQgXQD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LogController' shared autowired service.
     *
     * @return \App\Controller\LogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LogController.php';

        $container->services['App\\Controller\\LogController'] = $instance = new \App\Controller\LogController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\LogController', $container));

        return $instance;
    }
}
