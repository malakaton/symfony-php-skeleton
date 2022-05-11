<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Http\Controller;

use App\Shared\Application\Command\CommandBusInterface;
use App\Shared\Application\Command\CommandInterface;
use App\Shared\Infrastructure\Http\Response\OpenApi;
use Symfony\Component\HttpFoundation\Response;

abstract class CommandController
{
    private CommandBusInterface $commandBus;

    public function __construct(CommandBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param CommandInterface $command
     *
     * @return mixed
     */
    protected function handle(CommandInterface $command): mixed
    {
        return $this->commandBus->handle($command);
    }

    /**
     * @param array $resource
     * @param int $status
     * @return Response
     */
    protected function json(array $resource = [], int $status = Response::HTTP_OK, string $message = ''): Response
    {
        return OpenApi::one($resource, $status, $message)->getResponse();
    }
}
