<?php

namespace ContainerEbWMcyM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailingListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MailingListController' shared autowired service.
     *
     * @return \App\Controller\MailingListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MailingListController.php';

        $container->services['App\\Controller\\MailingListController'] = $instance = new \App\Controller\MailingListController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MailingListController', $container));

        return $instance;
    }
}
