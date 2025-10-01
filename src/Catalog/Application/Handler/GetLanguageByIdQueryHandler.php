<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Query\GetLangauageByIdQuery;
use App\Catalog\Domain\Entity\Language;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: GetLangauageByIdQuery::class)]
class GetLanguageByIdQueryHandler
{
    public function __construct(private LanguageRepositoryInterface $languageRepository) {
        $this->languageRepository = $languageRepository;
    }
    public function __invoke(GetLangauageByIdQuery $request): Language
    {
        $language = $this->languageRepository->getById($request->languageId);
        return $language;
    }
}
