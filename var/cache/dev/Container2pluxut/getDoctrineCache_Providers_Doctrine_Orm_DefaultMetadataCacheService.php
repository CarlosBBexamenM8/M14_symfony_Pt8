<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_8843f4c1b929ff7ccf3c798a97975d5b4568febf81882714d28b0c2dbc55279a');

return $instance;
