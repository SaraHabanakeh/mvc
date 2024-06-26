<?php

namespace ContainerVh7hb05;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GSSYJQfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gSSYJQf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gSSYJQf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookRepository' => ['privates', '.errored.4CjUMy6', NULL, 'Cannot determine controller argument for "App\\Controller\\BookController::showAllBook()": the $bookRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\BookRepository".'],
        ], [
            'bookRepository' => '?',
        ]);
    }
}
