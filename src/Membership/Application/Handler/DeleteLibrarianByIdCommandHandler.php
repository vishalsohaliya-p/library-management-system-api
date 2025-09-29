<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Command\DeleteLibrarianByIdCommand;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: DeleteLibrarianByIdCommand::class)]
class DeleteLibrarianByIdCommandHandler
{
    public function __construct(private LibrarianRepositoryInterface $librarianRepository){
        $this->librarianRepository = $librarianRepository;
    }

    public function __invoke(DeleteLibrarianByIdCommand $command): void{
        $language = $this->librarianRepository->getById($command->librarianId);
        
        $language->setIsActive(false);
        $language->setIsDeleted(true);

        $this->librarianRepository->delete($language);
    }
}
