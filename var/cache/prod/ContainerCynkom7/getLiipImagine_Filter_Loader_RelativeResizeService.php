<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.filter.loader.relative_resize' shared service.

include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RelativeResizeFilterLoader.php';

return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
