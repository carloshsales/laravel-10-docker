<?php

namespace App\Repositories\Interfaces;

use App\DTO\Support\{CreateSupportDTO, UpdateSupportDTO};
use stdClass;

interface SupportRepositoryInterface
{
    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;
    public function getAll(string $filter = null): array;
    public function findOneOrNull(string $id): stdClass | null;
    public function new(CreateSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass | null;
    public function delete(string $id): void;
}
