<?php

namespace App\Http\Controllers\Backend\Translation;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Translation\TranslationRepository;
use App\Http\Requests\Backend\Translation\ManageTranslationRequest;

/**
 * Class TranslationsTableController.
 */
class TranslationsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var TranslationRepository
     */
    protected $translation;

    /**
     * contructor to initialize repository object
     * @param TranslationRepository $translation;
     */
    public function __construct(TranslationRepository $translation)
    {
        $this->translation = $translation;
    }

    /**
     * This method return the data of the model
     * @param ManageTranslationRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageTranslationRequest $request)
    {
        return Datatables::of($this->translation->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($translation) {
                return Carbon::parse($translation->created_at)->toDateString();
            })
            ->addColumn('actions', function ($translation) {
                return $translation->action_buttons;
            })
            ->make(true);
    }
}
