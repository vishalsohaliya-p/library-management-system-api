<?php

namespace App\Catalog\Presentation\Controller;

use App\Catalog\Application\Command\AddLanguageCommand;
use App\Catalog\Application\Command\DeleteLangauageByIdCommand;
use App\Catalog\Application\Command\UpdateLanguageCommand;
use App\Catalog\Application\DTO\AddLanguageDto;
use App\Catalog\Application\DTO\LanguageResponseDto;
use App\Catalog\Application\DTO\UpdateLanguageDto;
use App\Catalog\Application\Query\GetAllLanguageQuery;
use App\Catalog\Application\Query\GetLangauageByIdQuery;
use App\Shared\Infrastructure\Http\ApiResponse;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/language")]
class LanguageController extends AbstractController{

    use HandleTrait;

    private LoggerInterface $logger;
    private MessageBusInterface $messageBus;

    public function __construct(LoggerInterface $logger, MessageBusInterface $messageBus){
        $this->logger = $logger;
        $this->messageBus = $messageBus;
    }

    #[Route(path:"/", name:"add-language", methods: ["POST"])]
    public function add(#[MapRequestPayload] AddLanguageDto $addLanguageDto): JsonResponse
    {
        $command = new AddLanguageCommand(
            $addLanguageDto->languageName
            , 1
            , $addLanguageDto->isActive
            , $addLanguageDto->isDeleted);

        $this->messageBus->dispatch($command);
        return ApiResponse::success(status: Response::HTTP_CREATED);
    }

    #[Route("/", "list-language", methods:["GET"])]
    public function getAll(): JsonResponse
    {
        $query = new GetAllLanguageQuery();
        $languages = $this->handle($query);

        $data = array_map(fn($language) => new LanguageResponseDto(
                languageId : $language->getLanguageId(),
                languageName : $language->getLanguageName(),
                createdAt : $language->getCreatedAt(),
                createdBy : $language->getCreatedBy(),
                modifiedAt : $language->getModifiedAt(),
                modifiedBy : $language->getModifiedBy(),
                isActive : $language->getIsActive(),
                isDeleted : $language->getIsDeleted(),
        )
        , $languages);

        return ApiResponse::success($data);
    }

    #[Route("/{id}","find-language", requirements: ["id"=> '\d+'], methods:["GET"])]
    public function getById(int $id): JsonResponse
    {
        $query = new GetLangauageByIdQuery($id);
        $language = $this->handle($query);

        $data = new LanguageResponseDto(
            languageId: $language->getLanguageId(),
            languageName: $language->getLanguageName(),
            createdAt: $language->getCreatedAt(),
            createdBy: $language->getCreatedBy(),
            modifiedAt: $language->getModifiedAt(),
            modifiedBy: $language->getModifiedBy(),
            isActive: $language->getIsActive(),
            isDeleted: $language->getIsDeleted(),
        );

        return ApiResponse::success($data);
    }

    #[Route("/{id}","update-language", requirements: ["id"=> '\d+'], methods: ["PUT"])]
    public function put(#[MapRequestPayload] UpdateLanguageDto $updateLanguageDto, int $id): JsonResponse
    {
        $command = new UpdateLanguageCommand(
            $id
            ,$updateLanguageDto->languageName
            ,1
            ,$updateLanguageDto->isActive
            ,$updateLanguageDto->isDeleted);

        $language = $this->handle($command);

        $this->messageBus->dispatch($command);
        return ApiResponse::success(status: Response::HTTP_NO_CONTENT);
    }

    #[Route("/{id}","delete-language", requirements: ["id"=> '\d+'], methods:["DELETE"])]
    public function delete(int $id): JsonResponse
    {
        $command = new DeleteLangauageByIdCommand(
            $id
            ,1);
        $this->messageBus->dispatch($command);
        return ApiResponse::success(status: Response::HTTP_NO_CONTENT);
    }
}