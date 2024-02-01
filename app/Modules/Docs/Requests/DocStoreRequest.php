<?php

namespace App\Modules\Docs\Requests;

use App\Modules\Docs\DTOs\DocDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Modules\Docs\Enums\DocType;

class DocStoreRequest extends FormRequest
{
    // public function authorize(): bool
    // {
    //     return auth()->check();
    // }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'type' => ['required', 'string', new Enum(DocType::class)],
        ];
    }

    public function toDto(): DocDTO
    {
        $validated = $this->validated();
        $validated['type'] = DocType::tryFrom($validated['type']);

        return new DocDTO(...$validated);
    }
}
