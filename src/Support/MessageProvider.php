<?php

namespace ILAB_Illuminate\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \ILAB_Illuminate\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
