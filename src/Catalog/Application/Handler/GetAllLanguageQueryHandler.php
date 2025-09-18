<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Query\GetAllLanguageQuery;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles:GetAllLanguageQuery::class)]
class GetAllLanguageQueryHandler
{
    function __construct(private LanguageRepositoryInterface $languageRepository){}

    public function __invoke(GetAllLanguageQuery $query): array
    {
        return $this->languageRepository->getAllLanguages();
    }

}
