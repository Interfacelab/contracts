<?php

namespace ILAB_Illuminate\Contracts\Cache;

interface LockProvider
{
    /**
     * Get a lock instance.
     *
     * @param  string  $name
     * @param  int  $seconds
     * @return \ILAB_Illuminate\Contracts\Cache\Lock
     */
    public function lock($name, $seconds = 0);
}
