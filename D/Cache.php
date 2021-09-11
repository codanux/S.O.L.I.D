<?php

namespace App\Services\D;

class Cache
{
    private CacheInterface $store;

    public function __construct(CacheInterface $store)
    {
        $this->store = $store;
    }

    public function get($key)
    {
        return $this->store->get($key);
    }

    public function set($key, $value)
    {
        return $this->store->set($key, $value);
    }

    public function delete($key)
    {
        return $this->store->delete($key);
    }
}
