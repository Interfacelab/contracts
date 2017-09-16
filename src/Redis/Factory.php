<?php

namespace ILAB_Illuminate\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string  $name
     * @return \ILAB_Illuminate\Redis\Connections\Connection
     */
    public function connection($name = null);
}
