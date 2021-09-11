<?php

namespace App\Services\D;

class Redis implements CacheInterface
{

    public function get($key)
    {
        return 'redis get';
    }

    public function set($key, $value)
    {
        // TODO: Implement set() method.
    }

    public function delete($key)
    {
        // TODO: Implement delete() method.
    }
}
