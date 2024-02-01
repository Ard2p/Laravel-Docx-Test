<?php
namespace App\Modules\Docs\Services;

use App\Modules\Docs\DTOs\DocDTO;

interface DocGenerateService
{
    public function generate(DocDTO $docDTO);
}
