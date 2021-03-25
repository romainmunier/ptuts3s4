<?php

namespace ContainerAnQgXQD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RztPCGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._RztPCG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._RztPCG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'utils' => '?',
        ]);
    }
}
