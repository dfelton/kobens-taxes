<?php

declare(strict_types=1);

namespace KobensTaxes\Test\Unit\Processor;

use Kobens\Taxes\Processor\FirstInFirstOut;
use Kobens\Taxes\Processor\FirstInFirstOutInterface;
use Kobens\Taxes\Processor\ProcessorInterface;
use PHPUnit\Framework\TestCase;

class FirstInFirstOutTest extends TestCase
{
    public function testClassImplementsInterface(): void
    {
        $reflection = new \ReflectionClass(FirstInFirstOut::class);
        $interfaces = $reflection->getInterfaceNames();
        $this->assertTrue(in_array(FirstInFirstOutInterface::class, $interfaces));
        $this->assertTrue(in_array(ProcessorInterface::class, $interfaces));
    }
}
