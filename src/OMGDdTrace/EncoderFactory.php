<?php

namespace OMGDdTrace;

interface EncoderFactory
{
    /** @return Encoder */
    public function build();
}
