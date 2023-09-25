<?php

declare(strict_types=1);

namespace Fuzz\HttpException\Contracts;

interface HttpExceptionInterface
{
	/**
	 * The HTTP status code
	 *
	 * @return int
	 */
	public function getStatusCode();

	/**
	 * Return headers
	 *
	 * @return array
	 */
	public function getHttpHeaders();

	/**
	 * Data corresponding to the error
	 *
	 * @return array
	 */
	public function getErrorData();

	/**
	 * String code of the error
	 *
	 * i.e. not_found or access_denied
	 *
	 * @return string
	 */
	public function getError();

	/**
	 * A user-friendly error description
	 *
	 * @return string
	 */
	public function getUserMessage();
}
