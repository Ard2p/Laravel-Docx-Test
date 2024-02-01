<?php

namespace App\Modules\Docs\Repositories;

use App\Modules\Docs\DTOs\DocDTO;
use App\Modules\Docs\Models\Doc;
use Illuminate\Database\Eloquent\Builder;

class DocRepositoryImplementation implements DocRepository
{
    public function get(): Builder
    {
        $doc = Doc::query()->get();

        return $doc;
    }

    public function store(DocDTO $docDTO): Doc
    {
        $doc = new Doc($docDTO->toArray());
        $doc->save();

        return $doc;
    }

    public function update(DocDTO $docDTO, Doc $doc): Doc
    {
        $doc->fill($docDTO->toArray());
        $doc->save();

        return $doc;
    }

    public function delete(Doc $doc): bool
    {
        return $doc->delete();
    }
}
