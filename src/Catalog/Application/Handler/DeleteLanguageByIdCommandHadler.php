<?php

namespace App\Catalog\Application\Handler;

use App\Catalog\Application\Command\DeleteLangauageByIdCommand;
use App\Catalog\Infrastructure\Repository\LanguageRepository;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: DeleteLangauageByIdCommand::class)]
class DeleteLanguageByIdCommandHadler
{
    public function __construct(private LanguageRepository $languageRepository){
        $this->languageRepository = $languageRepository;
    }

    public function __invoke(DeleteLangauageByIdCommand $command): void{
        $language = $this->languageRepository->getById($command->languageId);
        
        $language->setModifiedBy($command->modifiedBy);
        $language->setModifiedAt(new \DateTime());
        $language->setIsActive(false);
        $language->setIsDeleted(true);

        $this->languageRepository->delete($language);
    }
}
