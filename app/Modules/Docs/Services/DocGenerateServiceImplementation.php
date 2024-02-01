<?php

namespace App\Modules\Docs\Services;

use App\Modules\Docs\DTOs\DocDTO;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DocGenerateServiceImplementation implements DocGenerateService
{
    public function generate(DocDTO $docDTO)
    {
        $docTemplate = new TemplateProcessor(base_path('app/Modules/Docs/Templates/' . $docDTO->type->value . '.docx'));

        $path = 'docs';
        $name =  $docDTO->type->value . '.' . Str::random(32) . '.docx';

        Storage::makeDirectory('public/' . $path);

        $docTemplate->setValues($docDTO->toDocGenerated());
        $docTemplate->saveAs(storage_path('/app/public/' . $path . '/' . $name));

        return Storage::download('public/' . $path . '/' . $name, $docDTO->type->value . '.docx');
    }
}
