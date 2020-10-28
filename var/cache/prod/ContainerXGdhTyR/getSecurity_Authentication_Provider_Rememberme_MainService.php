<?php

namespace ContainerXGdhTyR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Rememberme_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.provider.rememberme.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider(($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), $container->getEnv('APP_SECRET'), 'main');
    }
}
