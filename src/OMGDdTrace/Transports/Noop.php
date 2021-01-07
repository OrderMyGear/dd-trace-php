<?php

namespace OMGDdTrace\Transports;

use OMGDdTrace\TracesBuffer;
use OMGDdTrace\Transport;

class Noop implements Transport
{

    public function sendTraces(TracesBuffer $tracesBuffer)
    {

    }

    public function sendServices(array $services)
    {

    }

    public function setHeader($key, $value)
    {

    }
}
