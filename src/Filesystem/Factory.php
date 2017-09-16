<?php

namespace ILAB_Illuminate\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string  $name
     * @return \ILAB_Illuminate\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
