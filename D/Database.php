<?php

namespace App\Services\D;

class Database implements CacheInterface
{

    public function get($key)
    {
        return 'database get';
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
