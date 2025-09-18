<?php

namespace App\Catalog\Application\Command;

class AddAvailableStatusCommand
{
    public function __construct(public string $availableStatusName){}
}
