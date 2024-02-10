<?php

namespace ContainerGtBSFfi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_MigrationsFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.migrations_factory' shared service.
     *
     * @return \Doctrine\Migrations\Version\MigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Version'.\DIRECTORY_SEPARATOR.'MigrationFactory.php';

        $a = ($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService'));

        if (isset($container->privates['doctrine.migrations.migrations_factory'])) {
            return $container->privates['doctrine.migrations.migrations_factory'];
        }

        return $container->privates['doctrine.migrations.migrations_factory'] = $a->getMigrationFactory();
    }
}
