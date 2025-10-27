<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    public function testAdd(): void
    {
        $m = new Math();
        $this->assertSame(5.0, $m->add(2, 3));
    }

    public function testSubtract(): void
    {
        $m = new Math();
        $this->assertSame(1.0, $m->subtract(4, 3));
    }

    public function testMultiply(): void
    {
        $m = new Math();
        $this->assertSame(12.0, $m->multiply(3, 4));
    }

    public function testDivide(): void
    {
        $m = new Math();
        $this->assertSame(2.0, $m->divide(10, 5));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        (new Math())->divide(10, 0);
    }
}
