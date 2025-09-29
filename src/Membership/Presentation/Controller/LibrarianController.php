<?php

namespace App\Membership\Presentation\Controller;

use App\Membership\Application\Command\AddLibrarianCommand;
use App\Membership\Application\Command\DeleteLibrarianByIdCommand;
use App\Membership\Application\Command\UpdateLibrarianCommand;
use App\Membership\Application\DTO\AddLibrarianDto;
use App\Membership\Application\DTO\LibrarianResponseDto;
use App\Membership\Application\DTO\LoginRequestDto;
use App\Membership\Application\DTO\LoginResponseDto;
use App\Membership\Application\DTO\UpdateLibrarianDto;
use App\Membership\Application\Query\GetAllLibrarianQuery;
use App\Membership\Application\Query\GetLibrarianByIdQuery;
use App\Membership\Application\Query\LibrarianLoginQuery;
use App\Membership\Infrastructure\Security\LibrarianUser;
use App\Shared\Infrastructure\Http\ApiResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path:"/librarian")]
class LibrarianController extends AbstractController
{
    use HandleTrait;

    public function __construct(
        private MessageBusInterface $messageBus,
        private LoggerInterface $logger)
    {
        $this->messageBus = $messageBus;
        $this->logger = $logger;
    }

    #[Route(path:"/login", name:"login_librarian", methods: ["POST"])]
    public function login(#[MapRequestPayload] LoginRequestDto $request, JWTTokenManagerInterface $jWTTokenManager): JsonResponse
    {
        $query = new LibrarianLoginQuery(
            $request->email,
            $request->password
        );

        $librarian = $this->handle($query);

        if (!$librarian) {
            return ApiResponse::error(
                'INVALID_CREDENTIALS',
                'Invalid email or password',
                status: Response::HTTP_UNAUTHORIZED
            );
        }

        $user = new LibrarianUser($librarian);

        $token = $jWTTokenManager->create($user);

        $loginResponse = new LoginResponseDto($token);

        return ApiResponse::success(
            $loginResponse,
            status: Response::HTTP_OK
        );
    }

    #[Route("/", name:"add_librarian", methods: ["POST"])]
    public function add(#[MapRequestPayload] AddLibrarianDto $request): JsonResponse
    {
        $command = new AddLibrarianCommand(
            $request->firstName,
            $request->lastName,
            $request->email,
            $request->phone,
            $request->hireDate,
            $request->photo,
            $request->password,
            $request->isActive,
            $request->isDeleted,
        );

        $this->messageBus->dispatch($command);

        return ApiResponse::success(status: Response::HTTP_CREATED);
    }

    #[Route("/", name:"all-librarian", methods: ["GET"])]
    public function getAll(): JsonResponse
    {
        $query = new GetAllLibrarianQuery();

        $librarians = $this->handle($query);

        $data = array_map(callback: fn($librarian): LibrarianResponseDto => new LibrarianResponseDto (
            librarianId: $librarian->getLibrarianId(),
            firstName: $librarian->getFirstName(),
            lastName: $librarian->getLastName(),
            email: $librarian->getEmail(),
            phone: $librarian->getPhone(),
            hireDate: $librarian->getHireDate(),
            photo: $librarian->getPhoto(),
            isActive: $librarian->getIsActive(),
            isDeleted: $librarian->getIsDeleted(),
        ), array: $librarians);

        return ApiResponse::success($data);
    }

    #[Route("/{id}", name:"get-librarian", methods: ["GET"])]
    public function getById(int $id): JsonResponse
    {
        $query = new GetLibrarianByIdQuery($id);

        $librarian = $this->handle($query);

        $data = new LibrarianResponseDto (
            librarianId: $librarian->getLibrarianId(),
            firstName: $librarian->getFirstName(),
            lastName: $librarian->getLastName(),
            email: $librarian->getEmail(),
            phone: $librarian->getPhone(),
            hireDate: $librarian->getHireDate(),
            photo: $librarian->getPhoto(),
            isActive: $librarian->getIsActive(),
            isDeleted: $librarian->getIsDeleted(),
        );

        return ApiResponse::success($data);

    }

    #[Route("/{id}","update-librarian", requirements: ["id"=> '\d+'], methods: ["PUT"])]
    public function put(#[MapRequestPayload] UpdateLibrarianDto $updateLibrarianDto, int $id): JsonResponse
    {
        $command = new UpdateLibrarianCommand(
            $id
            , $updateLibrarianDto->firstName
            , $updateLibrarianDto->lastName
            , $updateLibrarianDto->email
            , $updateLibrarianDto->phone
            , $updateLibrarianDto->hireDate
            , $updateLibrarianDto->photo
            , $updateLibrarianDto->isActive
            , $updateLibrarianDto->isDeleted
        );

        $language = $this->handle($command);

        $this->messageBus->dispatch($command);
        return ApiResponse::success(status: Response::HTTP_NO_CONTENT);
    }

    #[Route("/{id}","delete-librarian", requirements: ["id"=> '\d+'], methods:["DELETE"])]
    public function delete(int $id): JsonResponse
    {
        $command = new DeleteLibrarianByIdCommand($id);
        $this->messageBus->dispatch($command);
        return ApiResponse::success(status: Response::HTTP_NO_CONTENT);
    }

}
