<?php

namespace App\Http\Controllers;

use App\Modules\Docs\Models\Doc;
use App\Modules\Docs\Resources\DocResource;
use App\Modules\Docs\Requests\DocStoreRequest;
use App\Modules\Docs\Requests\DocUpdateRequest;
use App\Modules\Docs\Services\DocService;
use App\Modules\Docs\Services\DocGenerateService;
use App\Modules\Docs\DTOs\DocDTO;

use Illuminate\Http\Request;

class DocController extends Controller
{

    public function __construct(
        private readonly DocService $docService,
        private readonly DocGenerateService $docGenerateService,
        ) {}

    public function index(): SuccessResponse
    {
        $docs = $this->docService->get();

        return view('doc.index', compact('docs'));
    }

    public function download(Doc $doc)
    {
        return $this->docGenerateService->generate(DocDTO::fromModel($doc));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doc $doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doc $doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doc $doc)
    {
        //
    }
}
