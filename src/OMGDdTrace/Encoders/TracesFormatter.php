<?php

namespace OMGDdTrace\Encoders;

use OMGDdTrace\Span;
use OMGDdTrace\SpansCollection;
use OMGDdTrace\TracesBuffer;
use Iterator;

class TracesFormatter
{
    public function __invoke(TracesBuffer $tracesBuffer)
    {
        if ($tracesBuffer->count() === 0) {
            return [];
        }

        return $tracesBuffer->map(function(SpansCollection $spansCollection) {
            return $spansCollection->map(function(Span $span) {
                return [
                        'trace_id' => $span->traceId(),
                        'span_id' => $span->spanId(),
                        'parent_id' => $span->parentId(),
                        'name' => $span->name(),
                        'resource' => $span->resource(),
                        'service' => $span->service(),
                        'type' => $span->type(),
                        'start' => $span->start()->nanotime(),
                        'duration' => $span->duration()->nanotime(),
                        'error' => $span->error()
                    ] + ($span->meta() ? ['meta' => $span->meta()] : []);
            });
        });
    }
}
