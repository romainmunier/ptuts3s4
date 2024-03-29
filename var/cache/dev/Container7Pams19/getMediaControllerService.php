<?php

namespace Container7Pams19;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MediaController' shared autowired service.
     *
     * @return \App\Controller\MediaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MediaController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FileUploader.php';

        $container->services['App\\Controller\\MediaController'] = $instance = new \App\Controller\MediaController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\FileUploader'] ?? ($container->privates['App\\Service\\FileUploader'] = new \App\Service\FileUploader())));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MediaController', $container));

        return $instance;
    }
}
