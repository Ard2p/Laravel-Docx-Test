<?php
namespace App\Modules\Docs\Services;

use App\Modules\Docs\DTOs\DocDTO;
use App\Modules\Docs\Models\Doc;
use Illuminate\Support\Collection;

interface DocService
{
    public function get(): Collection;

    public function store(DocDTO $docDTO): Doc;

    public function update(DocDTO $docDTO, Doc $doc): Doc;

    public function delete(Doc $doc): bool;

}
