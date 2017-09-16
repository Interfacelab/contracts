<?php

namespace ILAB_Illuminate\Contracts\Mail;

use ILAB_Illuminate\Contracts\Queue\Factory as Queue;

interface Mailable
{
    /**
     * Send the message using the given mailer.
     *
     * @param  \ILAB_Illuminate\Contracts\Mail\Mailer  $mailer
     * @return void
     */
    public function send(Mailer $mailer);

    /**
     * Queue the given message.
     *
     * @param  \ILAB_Illuminate\Contracts\Queue\Factory  $queue
     * @return mixed
     */
    public function queue(Queue $queue);

    /**
     * Deliver the queued message after the given delay.
     *
     * @param  \DateTime|int  $delay
     * @param  \ILAB_Illuminate\Contracts\Queue\Factory  $queue
     * @return mixed
     */
    public function later($delay, Queue $queue);
}
