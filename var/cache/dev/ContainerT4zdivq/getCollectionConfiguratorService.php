<?php

namespace ContainerT4zdivq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCollectionConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CollectionConfigurator.php';

        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory'] ?? self::getControllerFactoryService($container)));
    }
}
