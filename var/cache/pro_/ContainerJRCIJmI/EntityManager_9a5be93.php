<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf831c = null;
    private $initializerc3289 = null;
    private static $publicProperties5069b = [
        
    ];
    public function getConnection()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getConnection', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getMetadataFactory', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getExpressionBuilder', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'beginTransaction', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getCache', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'transactional', array('func' => $func), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'commit', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->commit();
    }
    public function rollback()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'rollback', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'createQuery', array('dql' => $dql), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'createQueryBuilder', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'flush', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'clear', array('entityName' => $entityName), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->clear($entityName);
    }
    public function close()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'close', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->close();
    }
    public function persist($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'persist', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'remove', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'refresh', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'detach', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'merge', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'contains', array('entity' => $entity), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getEventManager', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getConfiguration', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'isOpen', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getUnitOfWork', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getProxyFactory', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'getFilters', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'isFiltersStateClean', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, 'hasFilters', array(), $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        return $this->valueHolderf831c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc3289 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf831c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf831c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf831c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc3289 && ($this->initializerc3289->__invoke($valueHolderf831c, $this, '__get', ['name' => $name], $this->initializerc3289) || 1) && $this->valueHolderf831c = $valueHolderf831c;
        if (isset(self::$publicProperties5069b[$name])) {
            return $this->valueHolderf831c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
