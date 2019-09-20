<?php

namespace App\Repositories\Backend\Translation;

use DB;
use Carbon\Carbon;
use App\Models\Translation\Translation;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TranslationRepository.
 */
class TranslationRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Translation::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return Translation::all();
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $translation = self::MODEL;
        $translation = new $translation();
        if ($translation->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.translations.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Translation $translation
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Translation $translation, array $input)
    {
        if ($translation->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.translations.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Translation $translation
     * @throws GeneralException
     * @return bool
     */
    public function delete(Translation $translation)
    {
        if ($translation->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.translations.delete_error'));
    }
}
