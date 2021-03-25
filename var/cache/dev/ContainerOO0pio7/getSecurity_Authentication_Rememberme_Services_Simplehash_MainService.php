<?php

namespace ContainerOO0pio7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Rememberme_Services_Simplehash_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php';

        return $container->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.login'] ?? $container->load('getSecurity_User_Provider_Concrete_LoginService'));
        }, 1), $container->getEnv('APP_SECRET'), 'main', ['lifetime' => 604800, 'path' => '/', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));
    }
}
