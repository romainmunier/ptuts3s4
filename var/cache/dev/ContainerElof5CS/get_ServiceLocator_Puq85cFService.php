<?php

namespace ContainerElof5CS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Puq85cFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.puq85cF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.puq85cF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carousel' => ['privates', '.errored..service_locator.puq85cF.App\\Entity\\CarouselLike', NULL, 'Cannot autowire service ".service_locator.puq85cF": it references class "App\\Entity\\CarouselLike" but no such service exists.'],
        ], [
            'carousel' => 'App\\Entity\\CarouselLike',
        ]);
    }
}
