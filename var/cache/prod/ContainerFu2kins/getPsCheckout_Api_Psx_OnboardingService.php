<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.api.psx.onboarding' shared service.

return $this->services['ps_checkout.api.psx.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Api\Psx\Onboarding(${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->load('getPsCheckout_Repository_Prestashop_AccountService.php')) && false ?: '_'});