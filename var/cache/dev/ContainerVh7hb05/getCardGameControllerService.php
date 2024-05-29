<?php

namespace ContainerVh7hb05;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardGameControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CardGameController' shared autowired service.
     *
     * @return \App\Controller\CardGameController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CardGameController.php';

        $container->services['App\\Controller\\CardGameController'] = $instance = new \App\Controller\CardGameController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\CardGameController', $container));

        return $instance;
    }
}
