<?php

namespace ContainerElof5CS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NewsController' shared autowired service.
     *
     * @return \App\Controller\NewsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NewsController.php';

        $container->services['App\\Controller\\NewsController'] = $instance = new \App\Controller\NewsController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\NewsController', $container));

        return $instance;
    }
}
