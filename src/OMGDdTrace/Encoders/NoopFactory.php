<?php

namespace OMGDdTrace\Encoders;

use OMGDdTrace\EncoderFactory;

final class NoopFactory implements EncoderFactory
{
    public function build()
    {
        return new Noop;
    }
}
