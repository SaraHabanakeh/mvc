<?php

namespace ContainerVh7hb05;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XerdVEBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xerdVEB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xerdVEB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookRepository' => ['privates', '.errored.P4QfgV2', NULL, 'Cannot determine controller argument for "App\\Controller\\BookController::delete()": the $bookRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\BookRepository".'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'bookRepository' => '?',
            'doctrine' => '?',
        ]);
    }
}
