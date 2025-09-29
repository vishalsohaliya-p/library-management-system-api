<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Command\UpdateLanguageCommand;
use App\Catalog\Domain\Entity\Language;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use App\Catalog\Infrastructure\Repository\LanguageRepository;
use DateTimeImmutable;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles:UpdateLanguageCommand::class)]
class UpdateLanguageCommandHandler
{
    public function __construct(private LanguageRepositoryInterface $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function __invoke(UpdateLanguageCommand $command): void
    {
        $language = $this->languageRepository->getById($command->languageId);
        
        $language->setLanguageName($command->languageName);
        $language->setModifiedBy($command->modifiedBy);
        $language->setModifiedAt(new DateTimeImmutable());
        $language->setIsActive($command->isActive);
        $language->setIsDeleted($command->isDeleted);

        $this->languageRepository->update($language);
    }

}
