<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Http\Cli\Command;

use App\Shared\Application\Query\QueryBusInterface;
use App\Shared\Application\Query\QueryInterface;
use App\Shared\Infrastructure\Http\Response\OpenApi;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpFoundation\Response;

abstract class QueryCommand extends Command
{
    private QueryBusInterface $queryBus;

    public function __construct(QueryBusInterface $queryBus)
    {
        parent::__construct();

        $this->queryBus = $queryBus;
    }

    /**
     * @param QueryInterface $query
     * @return array|null
     *
     */
    protected function ask(QueryInterface $query): array|null
    {
        return $this->queryBus->ask($query);
    }

    /**
     * @param array $resource
     * @param int $status
     * @return Response
     */
    protected function json(array $resource, int $status = Response::HTTP_OK): Response
    {
        return OpenApi::one($resource, $status)->getResponse();
    }
}
