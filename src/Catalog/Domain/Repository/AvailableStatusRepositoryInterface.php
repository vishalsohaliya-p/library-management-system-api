<?php

namespace App\Catalog\Domain\Repository;

use App\Catalog\Domain\Entity\AvailableStatus;

interface AvailableStatusRepositoryInterface
{
    public function save(AvailableStatus $availableStatus): void;
}
