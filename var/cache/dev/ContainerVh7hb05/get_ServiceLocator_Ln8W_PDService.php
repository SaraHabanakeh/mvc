<?php

namespace ContainerVh7hb05;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ln8W_PDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ln8W.pD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ln8W.pD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookRepository' => ['privates', '.errored.QFvHdGT', NULL, 'Cannot determine controller argument for "App\\Controller\\BookController::showBookByIsbn()": the $bookRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\BookRepository".'],
        ], [
            'bookRepository' => '?',
        ]);
    }
}
