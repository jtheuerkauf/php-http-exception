<?php

declare(strict_types=1);

namespace Fuzz\HttpException;

use Throwable;

class PreconditionRequiredHttpException extends HttpException
{
    /**
     * HTTP status code
     *
     * @const int
     */
    const HTTP_CODE = 428;

    /**
     * Error code storage;
     *
     * @const string
     */
    const ERROR = 'precondition_required';

    /**
     * PreconditionRequiredHttpException constructor.
     *
     * @param string|null    $errorDescription
     * @param array          $errorData
     * @param string|null    $userTitle
     * @param null           $userMessage
     * @param array          $headers
     * @param Throwable |null $previous
     */
    public function __construct(
        string $errorDescription = null,
        array $errorData = [],
        string $userTitle = null,
        $userMessage = null,
        array $headers = [],
        Throwable $previous = null
    ) {
        parent::__construct(
            self::HTTP_CODE,
            self::ERROR,
            $errorDescription,
            $errorData,
            $userTitle,
            $userMessage,
            $headers,
            $previous
        );
    }
}
