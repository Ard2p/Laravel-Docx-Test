<?php

namespace App\Modules\Docs\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'name' => $this->resource->name,
            'price' => $this->resource->price
        ];
    }
}
