<?php

namespace ContainerOO0pio7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VJtIhGWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VJtIhGW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VJtIhGW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['privates', '.errored.QeYtGrv', NULL, 'Cannot determine controller argument for "App\\Controller\\UserController::changeProfilePicture()": the $kernel argument is type-hinted with the non-existent class or interface: "App\\Controller\\KernelInterface". Did you forget to add a use statement?'],
        ], [
            'kernel' => '?',
        ]);
    }
}
