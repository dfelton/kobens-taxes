<?php

declare(strict_types=1);

namespace KobensTaxes\Test\Unit\Processor;

use PHPUnit\Framework\TestCase;
use Kobens\Taxes\Processor\ProcessorInterface;
use Kobens\Taxes\Processor\FirstInFirstOutInterface;

class FirstInFirstOutInterfaceTest extends TestCase
{
    public function testExtendsBaseProcessorInterface(): void
    {
        $reflection = new \ReflectionClass(FirstInFirstOutInterface::class);
        $interfaces = $reflection->getInterfaceNames();
        $this->assertTrue(in_array(ProcessorInterface::class, $interfaces));
    }
}
