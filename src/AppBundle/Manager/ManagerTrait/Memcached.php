<?php

namespace AppBundle\Manager\ManagerTrait;

trait Memcached
{
    /**
     * @var \Memcached
     */
    protected $cacheDriver;
    /**
     * @var string
     */
    protected $cachePrefix;
    /**
     * @var int
     */
    protected $cacheTTL = 3600;
    /**
     * @var int
     */
    protected $cacheVersion = null;
    /**
     * @var array
     */
    protected $cacheLoads = [];
    /**
     * @param \Memcached $cacheDriver
     */
    public function setCacheDriver(\Memcached $cacheDriver)
    {
        $this->cacheDriver = $cacheDriver;
    }
    /**
     * @param string $cachePrefix
     */
    public function setCachePrefix($cachePrefix)
    {
        $this->cachePrefix = $cachePrefix;
    }
    /**
     * @param int $cacheTTL
     */
    public function setCacheTTL($cacheTTL)
    {
        $this->cacheTTL = $cacheTTL;
    }
    /**
     * @param int $cacheVersion
     */
    public function setCacheVersion($cacheVersion)
    {
        $this->cacheVersion = $cacheVersion;
    }
    /**
     * Load the values from the cache engine.
     *
     * @param string|null $key
     *
     * @return mixed|null
     */
    public function cacheLoad($key = null)
    {
        $cacheDriver = $this->cacheDriver;
        $realKey = $this->getRealKey($key);
        if (false === $cacheDriver->get($realKey)) {
            return null;
        }
        return $cacheDriver->get($realKey);
    }
    /**
     * Persists value into the cache engine.
     *
     * @param mixed       $value
     * @param string|null $key
     *
     * @return bool
     */
    public function cacheSave($value, $key = null)
    {
        $cacheDriver = $this->cacheDriver;
        // Cannot save boolean value because false is considered as a missing value.
        if (is_bool($value)) {
            return false;
        }
        $realKey = $this->getRealKey($key);
        return false !== $cacheDriver->set($realKey, $value, $this->cacheTTL);
    }
    /**
     * Returns the complete cache key.
     *
     * @param null $key
     *
     * @return string
     */
    protected function getRealKey($key = null)
    {
        $realKey = sprintf('%s', $this->cachePrefix);
        if (null !== $this->cacheVersion) {
            $realKey .= sprintf('_v%s', $this->cacheVersion);
        }
        if (null !== $key) {
            $realKey .= sprintf('_%s', $key);
        }
        $realKey = str_replace(' ', '_', $realKey);
        return $realKey;
    }
}