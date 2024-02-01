<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Docs\Models\Doc;
use App\Http\Controllers\DocController;

Route::get('/docs/download/{doc}', [DocController::class, 'download'])->name('docs.download');
