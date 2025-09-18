<?php

namespace App\Catalog\Domain\Repository;

use App\Catalog\Domain\Entity\Language;

interface LanguageRepositoryInterface
{
    public function save(Language $language): void;
    public function update(Language $language): void;
    public function getAllLanguages(): array;
    public function getById(int $id): Language;
    public function delete(Language $language): void;
}
