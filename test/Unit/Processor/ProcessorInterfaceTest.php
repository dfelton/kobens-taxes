<?php

declare(strict_types=1);

namespace KobensTaxes\Test\Unit\Processor;

use PHPUnit\Framework\TestCase;
use Kobens\Taxes\Processor\ProcessorInterface;

class ProcessorInterfaceTest extends TestCase
{
    public function testProcessorHasProcessMethod(): void
    {
        $reflection = new \ReflectionClass(ProcessorInterface::class);
        $methods = $reflection->getMethods();
        $flat = [];
        foreach ($methods as $method) {
            $flat[] = $method->name;
        }
        $this->assertTrue(in_array('process', $flat));
        $this->assertTrue(count($flat) === 1);
    }
}
