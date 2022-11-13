<?php

namespace App\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;

class EntityManagerFactory
{
    /** @throws ORMException */
    public static function createEntityManager(): EntityManager
    {
        $configuration = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . '/..'],
            isDevMode: true,
        );

        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../database/doctrine.sqlite',
        ];

        return EntityManager::create($connection, $configuration);
    }
}