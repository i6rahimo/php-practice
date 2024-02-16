<?php

use Interval;
use PHPUnit\Framework\TestCase;

class IntervalTest extends TestCase
{
    private DateTimeImmtable $today;
    private DateTimeImmtable $yesterday;
    private DateTimeImmtable $tomorrow;

    protected function setUp(): void
    {
        $this->today = new DateTimeImmutable();
        $this->yestarday = $this->today->add(\DateInterval::createFromDateString("-1 day"));
        $this->tomorrow = $this->today->add(\DateInterval::createFromDateString("1 day"));
        parent::setUp();
    }

    public function testValidDates()
    {
        $interval = new Interval($this->yesterday, $this->today);

        $this->assertEquals($this->yesterday, $interval->start);
        $this->assertEquals($this->today, $interval->end);
    }

    public function testInvalidDated()
    {
        $this->expextExpection(\InvalidArgumentExeption::class);

        new Interval($this->today, $this->yesterday);
    }

}