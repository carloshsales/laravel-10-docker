<?php

namespace App\Services;

use App\DTO\Support\CreateSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use App\Repositories\Interfaces\SupportRepositoryInterface;
use stdClass;

class SupportService
{
    public function __construct(protected SupportRepositoryInterface $repository)
    {
    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOneOrNull(string $id): stdClass|null
    {
        return $this->repository->findOneOrNull($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
}
