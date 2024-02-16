<?php

class Interval 
{
    public DateTimeImmutable $start;
    public DateTimeImmutable $end;
    public function __construct(DateTimeImmutable $start, DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}