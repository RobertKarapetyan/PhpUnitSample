<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TestClass extends TestCase
{
    public function testMethod(): void
    {
        $this->assertEquals(true, true);
    }
}