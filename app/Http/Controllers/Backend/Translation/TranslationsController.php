<?php

namespace App\Http\Controllers\Backend\Translation;

use App\Models\Translation\Translation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Translation\TranslationRepository;
use App\Http\Requests\Backend\Translation\ManageTranslationRequest;
use App\Http\Requests\Backend\Translation\CreateTranslationRequest;
use App\Http\Requests\Backend\Translation\StoreTranslationRequest;
use App\Http\Requests\Backend\Translation\EditTranslationRequest;
use App\Http\Requests\Backend\Translation\UpdateTranslationRequest;
use App\Http\Requests\Backend\Translation\DeleteTranslationRequest;

/**
 * TranslationsController
 */
class TranslationsController extends Controller
{
    /**
     * variable to store the repository object
     * @var TranslationRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param TranslationRepository $repository ;
     */
    public function __construct(TranslationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Translation\ManageTranslationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageTranslationRequest $request)
    {
        return view('backend.translations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateTranslationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateTranslationRequest $request)
    {
        return view('backend.translations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTranslationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTranslationRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.translations.index')->withFlashSuccess(trans('alerts.backend.translations.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Translation\Translation $translation
     * @param  EditTranslationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Translation $translation, EditTranslationRequest $request)
    {
        return view('backend.translations.edit', compact('translation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTranslationRequestNamespace $request
     * @param  App\Models\Translation\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTranslationRequest $request, Translation $translation)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($translation, $input);
        //return with successfull message
        return redirect()->route('admin.translations.index')->withFlashSuccess(trans('alerts.backend.translations.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteTranslationRequestNamespace $request
     * @param  App\Models\Translation\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translation $translation, DeleteTranslationRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($translation);
        //returning with successfull message
        return redirect()->route('admin.translations.index')->withFlashSuccess(trans('alerts.backend.translations.deleted'));
    }

}
