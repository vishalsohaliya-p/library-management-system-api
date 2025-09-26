<?php

namespace App\Shared\Infrastructure\EventListener;

use App\Shared\Infrastructure\Http\ApiResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Validator\Exception\ValidationFailedException;

class ExceptionListener implements EventSubscriberInterface
{

    public function __construct(private LoggerInterface $logger){
        $this->logger = $logger;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        // Default values
        $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
        $errorCode  = 'INTERNAL_SERVER_ERROR';
        $message    = 'An unexpected error occurred.';
        $details    = [];

        // Handle Validation errors (422)
        if ($exception instanceof UnprocessableEntityHttpException) {
            $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY; // 422
            $errorCode  = 'VALIDATION_ERROR';
            $message    = 'One or more fields are invalid.';

             //$this->logger->error($message, [''=> $exception]);

            //Collect field-specific errors
            $previous = $exception->getPrevious();

            if($previous instanceof ValidationFailedException) {
                foreach ($previous->getViolations() as $violation) {
                    $details[$violation->getPropertyPath()] = $violation->getMessage();
                }
            }
        }
        //Handle Symfony HttpExceptions (404, 403, etc.)
        elseif ($exception instanceof HttpExceptionInterface) {
            $statusCode = $exception->getStatusCode();
            $errorCode  = strtoupper(str_replace(' ', '_', $exception->getMessage() ?: 'HTTP_ERROR'));
            $message    = $exception->getMessage();
        }
        //Optional: in dev, expose full exception message
        else {
            if ($_ENV['APP_ENV'] === 'dev') {
                $message = $exception->getMessage(); // show full message in dev
            } else {
                $message = 'An unexpected error occurred.'; // safe generic message
            }
        }

        // Always log the real exception internally
        // (inject LoggerInterface in constructor)
        $this->logger->error($exception->getMessage(), [
            'exception' => $exception,
        ]);

        $response = ApiResponse::error($errorCode, $message, $details, $statusCode);
        $event->setResponse($response);
    }

}
