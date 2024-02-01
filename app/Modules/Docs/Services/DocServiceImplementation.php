<?php

namespace App\Modules\Docs\Services;

use App\Modules\Docs\DTOs\DocDTO;
use App\Modules\Docs\Models\Doc;
use App\Modules\Docs\Repositories\DocRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DocServiceImplementation implements DocService
{
    public function __construct(
        protected readonly DocRepository $docRepository
    ){}

    public function get(): Collection
    {
        $query = $this->DocRepository->get();

        return $query;
    }

    public function store(DocDTO $docDTO): Doc
    {
        $doc = DB::transaction(function () use ($docDTO) {

            $doc = $this->DocRepository->store($docDTO);

            return $doc;
        });

        return $doc;
    }

    public function update(DocDTO $docDTO, Doc $doc): Doc
    {
        $doc = DB::transaction(function () use ($doc, $docDTO) {

            $doc = $this->DocRepository->update($docDTO, $doc);

            return $doc;
        });

        return $doc;
    }

    public function delete(Doc $doc): bool
    {
        $doc = DB::transaction(function () use ($doc) {

            $doc = $this->DocRepository->delete($doc);

            return $doc;
        });

        return $doc;
    }
}
