<?php

namespace ContainerElof5CS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAPIControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\APIController' shared autowired service.
     *
     * @return \App\Controller\APIController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/APIController.php';

        $container->services['App\\Controller\\APIController'] = $instance = new \App\Controller\APIController(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\APIController', $container));

        return $instance;
    }
}