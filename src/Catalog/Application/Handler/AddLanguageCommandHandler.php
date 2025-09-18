<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Command\AddLanguageCommand;
use App\Catalog\Domain\Entity\Language;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: AddLanguageCommand::class)]
class AddLanguageCommandHandler
{
    public function __construct(private LanguageRepositoryInterface $languageRepository) {}

    public function __invoke(AddLanguageCommand $command): void
    {   
        $language = new Language();
        $language->setLanguageName($command->languageName);
        $language->setcreatedBy($command->createdBy);
        $language->setIsActive($command->isActive);
        $language->setIsDeleted($command->isDeleted);
        $this->languageRepository->save($language);
    }
}
