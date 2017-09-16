<?php

namespace ILAB_Illuminate\Contracts\Support;

interface Responsable
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \ILAB_Illuminate\Http\Request  $request
     * @return \ILAB_Illuminate\Http\Response
     */
    public function toResponse($request);
}
