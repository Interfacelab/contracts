<?php

namespace ILAB_Illuminate\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string  $name
     * @return \ILAB_Illuminate\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
