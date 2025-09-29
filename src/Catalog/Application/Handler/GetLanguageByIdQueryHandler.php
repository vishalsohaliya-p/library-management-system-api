<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Query\GetlangauageByIdQuery;
use App\Catalog\Domain\Entity\Language;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use App\Catalog\Infrastructure\Repository\LanguageRepository;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: GetlangauageByIdQuery::class)]
class GetLanguageByIdQueryHandler
{
    public function __construct(private LanguageRepositoryInterface $languageRepository) {
        $this->languageRepository = $languageRepository;
    }
    public function __invoke(GetlangauageByIdQuery $request): Language
    {
        $language = $this->languageRepository->getById($request->languageId);
        return $language;
    }
}
