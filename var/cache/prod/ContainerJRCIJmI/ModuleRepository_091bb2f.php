<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf831c = null;
    private $initializerc3289 = null;
    private static $publicProperties5069b = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getList', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getInstalledModules', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getMustBeConfiguredModules', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getUpgradableModules', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerc3289 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderf831c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderf831c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderf831c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__get', ['name' => $name], $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        if (isset(self::$publicProperties5069b[$name])) {
            return $this->valueHolderf831c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf831c;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf831c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf831c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf831c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__isset', array('name' => $name), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf831c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf831c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__unset', array('name' => $name), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf831c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf831c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__clone', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        $this->valueHolderf831c = clone $this->valueHolderf831c;
    }
    public function __sleep()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__sleep', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return array('valueHolderf831c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3289 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3289;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'initializeProxy', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf831c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf831c;
    }
}
