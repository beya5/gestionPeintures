<?php

namespace ContainerFKcbn3c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ib1WIGEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ib1WIGE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ib1WIGE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'responseParameters' => ['privates', '.errored..service_locator.ib1WIGE.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.ib1WIGE": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }
}
