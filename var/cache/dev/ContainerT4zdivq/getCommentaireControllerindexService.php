<?php

namespace ContainerT4zdivq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zzncxfm.App\Controller\CommentaireController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zzncxfm.App\\Controller\\CommentaireController::index()'] = ($container->privates['.service_locator.Zzncxfm'] ?? $container->load('get_ServiceLocator_ZzncxfmService'))->withContext('App\\Controller\\CommentaireController::index()', $container);
    }
}
