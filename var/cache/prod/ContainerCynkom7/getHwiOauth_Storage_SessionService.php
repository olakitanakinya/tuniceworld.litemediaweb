<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.storage.session' shared service.

include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorageInterface.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorage/SessionStorage.php';

return $this->services['hwi_oauth.storage.session'] = new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'});
