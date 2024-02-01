<?php

namespace App\Modules\Docs\Repositories;

use App\Modules\Docs\DTOs\DocDTO;
use App\Modules\Docs\Models\Doc;
use Illuminate\Database\Eloquent\Builder;

interface DocRepository
{
    public function get(): Builder;

    public function store(DocDTO $docDTO): Doc;

    public function update(DocDTO $docDTO, Doc $Doc): Doc;

    public function delete(Doc $doc): bool;
}
