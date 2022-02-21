<?php

declare(strict_types=1);

namespace Kobens\Taxes\Processor;

interface ProcessorInterface
{
    public function process(int $year): void;
}
