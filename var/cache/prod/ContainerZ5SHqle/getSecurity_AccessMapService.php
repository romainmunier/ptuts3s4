<?php

namespace ContainerZ5SHqle;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/dashboard'), [0 => 'ROLE_ADMIN', 1 => 'ROLE_DEVELOPERS', 2 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/control/admin'), [0 => 'ROLE_ADMIN', 1 => 'ROLE_DEVELOPERS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/dashboard/users'), [0 => 'ROLE_ADMIN', 1 => 'ROLE_DEVELOPERS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/dashboard/mailing'), [0 => 'ROLE_ADMIN', 1 => 'ROLE_DEVELOPERS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

        return $instance;
    }
}
