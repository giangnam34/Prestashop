<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.profile.command_handler.delete_profile' shared service.

return $this->services['prestashop.adapter.profile.command_handler.delete_profile'] = new \PrestaShop\PrestaShop\Adapter\Profile\CommandHandler\DeleteProfileHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_PS_ADMIN_PROFILE_"), ($this->services['prestashop.adapter.data_provider.employee'] ?? $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')));
