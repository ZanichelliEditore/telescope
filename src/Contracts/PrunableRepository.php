<?php

namespace Laravel\Telescope\Contracts;

use DateTimeInterface;

interface PrunableRepository
{
    /**
     * Prune all of the entries older than the given date.
     *
     * @param  \DateTimeInterface  $before
     * @param  $keepExceptions
     * @return void
     */
    public function prune(DateTimeInterface $before, $keepExceptions);
}
