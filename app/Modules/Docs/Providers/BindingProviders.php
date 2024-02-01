<?php

namespace App\Modules\Docs\Providers;

use App\Modules\Docs\Repositories\DocRepository;
use App\Modules\Docs\Repositories\DocRepositoryImplementation;
use App\Modules\Docs\Services\DocService;
use App\Modules\Docs\Services\DocServiceImplementation;
use App\Modules\Docs\Services\DocGenerateService;
use App\Modules\Docs\Services\DocGenerateServiceImplementation;
use Illuminate\Support\ServiceProvider;

class BindingProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DocService::class, DocServiceImplementation::class);
        $this->app->bind(DocGenerateService::class, DocGenerateServiceImplementation::class);
        $this->app->bind(DocRepository::class, DocRepositoryImplementation::class);
    }
}
