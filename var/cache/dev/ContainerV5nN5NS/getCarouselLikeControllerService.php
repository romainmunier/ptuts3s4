<?php

namespace ContainerV5nN5NS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarouselLikeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CarouselLikeController' shared autowired service.
     *
     * @return \App\Controller\CarouselLikeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CarouselLikeController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FileUploader.php';

        $container->services['App\\Controller\\CarouselLikeController'] = $instance = new \App\Controller\CarouselLikeController(($container->privates['App\\Service\\FileUploader'] ?? ($container->privates['App\\Service\\FileUploader'] = new \App\Service\FileUploader())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\CarouselLikeController', $container));

        return $instance;
    }
}
