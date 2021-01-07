<?php

namespace OMGDdTrace\Encoders;

use OMGDdTrace\Encoder;
use OMGDdTrace\TracesBuffer;

class Noop implements Encoder
{

    public function encodeTraces(TracesBuffer $traces)
    {

    }

    public function encodeServices(array $services)
    {

    }

    public function read()
    {

    }

    public function contentType()
    {

    }
}
