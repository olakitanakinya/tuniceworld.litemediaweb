<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.filter.loader.background' shared service.

include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/BackgroundFilterLoader.php';

return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->load('getLiipImagineService.php')) && false ?: '_'});
