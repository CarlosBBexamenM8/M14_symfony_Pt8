<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_475c57f549e4648623445291959bff4c0bb3cb914ae72d4e8b684dfcec2962ee');

return $instance;
