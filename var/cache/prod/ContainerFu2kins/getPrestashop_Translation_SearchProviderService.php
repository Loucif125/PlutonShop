<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.search_provider' shared service.

return $this->services['prestashop.translation.search_provider'] = new \PrestaShopBundle\Translation\Provider\SearchProvider(${($_ = isset($this->services['prestashop.translation.database_loader']) ? $this->services['prestashop.translation.database_loader'] : $this->load('getPrestashop_Translation_DatabaseLoaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.translation.external_module_provider']) ? $this->services['prestashop.translation.external_module_provider'] : $this->load('getPrestashop_Translation_ExternalModuleProviderService.php')) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources/translations'), ($this->targetDirs[3].'\\app/../modules'));
