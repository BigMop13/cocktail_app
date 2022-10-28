<?php

namespace ContainerFqv1Nsm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder051aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9c6a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d860 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getConnection', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getMetadataFactory', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getExpressionBuilder', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'beginTransaction', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getCache', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'transactional', array('func' => $func), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'commit', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->commit();
    }

    public function rollback()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'rollback', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getClassMetadata', array('className' => $className), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'createQuery', array('dql' => $dql), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'createNamedQuery', array('name' => $name), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'createQueryBuilder', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'flush', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'clear', array('entityName' => $entityName), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->clear($entityName);
    }

    public function close()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'close', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->close();
    }

    public function persist($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'persist', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'remove', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'refresh', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'detach', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'merge', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'contains', array('entity' => $entity), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getEventManager', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getConfiguration', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'isOpen', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getUnitOfWork', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getProxyFactory', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'initializeObject', array('obj' => $obj), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'getFilters', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'isFiltersStateClean', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'hasFilters', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return $this->valueHolder051aa->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9c6a0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder051aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder051aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder051aa->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__get', ['name' => $name], $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        if (isset(self::$publicProperties5d860[$name])) {
            return $this->valueHolder051aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder051aa;

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

        $targetObject = $this->valueHolder051aa;
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
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder051aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder051aa;
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
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__isset', array('name' => $name), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder051aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder051aa;
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
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__unset', array('name' => $name), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder051aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder051aa;
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
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__clone', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        $this->valueHolder051aa = clone $this->valueHolder051aa;
    }

    public function __sleep()
    {
        $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, '__sleep', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;

        return array('valueHolder051aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9c6a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9c6a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9c6a0 && ($this->initializer9c6a0->__invoke($valueHolder051aa, $this, 'initializeProxy', array(), $this->initializer9c6a0) || 1) && $this->valueHolder051aa = $valueHolder051aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder051aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder051aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
