<?php

namespace Container7Pams19;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGalleryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GalleryController' shared autowired service.
     *
     * @return \App\Controller\GalleryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GalleryController.php';

        $container->services['App\\Controller\\GalleryController'] = $instance = new \App\Controller\GalleryController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GalleryController', $container));

        return $instance;
    }
}
