<?php

namespace App\Modules\Docs\DTOs;

use App\DTOs\BaseDTO;
use App\Modules\Docs\Models\Doc;
use App\Modules\Docs\Enums\DocType;

class DocDTO extends BaseDTO
{
    public function __construct(
        public readonly string $title,
        public readonly string $name,
        public readonly int $price,
        public readonly DocType $type
    ) {}

    public static function fromModel(Doc $doc): self
    {
        return new self(
            $doc->title,
            $doc->name,
            $doc->price,
            $doc->type
        );
    }

    public function toDocGenerated(): array
    {
        return [
            'title' => $this->title,
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}
