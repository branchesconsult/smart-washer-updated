<?php

namespace App\Repositories\Backend\PaymentMethod;

use App\Exceptions\GeneralException;
use App\Models\PaymentMethod\PaymentMethod;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class PaymentMethodRepository.
 */
class PaymentMethodRepository extends BaseRepository
{

    /**
     * Associated Repository Model.
     */
    const MODEL = PaymentMethod::class;

    /**
     * Site Logo Path.
     *
     * @var string
     */
    protected $site_logo_path;
    /**
     * Storage Class Object.
     *
     * @var \Illuminate\Support\Facades\Storage
     */
    protected $storage;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->site_logo_path = 'img' . DIRECTORY_SEPARATOR . 'logo' . DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'id','name','icon'
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if (!empty($input['icon'])) {
            $input['icon'] = $this->uploadIcon($input['icon']);
        }

        if (\DB::table('payment_methods')->insert(
            ['name' => $input['name'],'icon' => $input['icon'],'description' => $input['description']]
        )) {
            return true;
        }
        throw new GeneralException("PaymentMethod not created.");
    }

    /**
     * @param \App\Models\PaymentMethod\PaymentMethod $PaymentMethod
     * @param array                $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(PaymentMethod $paymentmethod, array $input)
    {
        if (!empty($input['icon'])) {
            $this->removeIcon($paymentmethod->icon);
            $input['icon'] = $this->uploadIcon($input['icon']);
        }
        //If PaymentMethod updated successfully
        if ($paymentmethod->update($input)) {
            return true;
        }

        throw new GeneralException("PaymentMethod not updated.");
    }

    /**
     * @param \App\Models\PaymentMethod\PaymentMethod $PaymentMethod
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(PaymentMethod $PaymentMethod)
    {

        if ($PaymentMethod->delete()) {
            return true;
        }

        throw new GeneralException("PaymentMethod not deleted.");
    }

    /**
     * @param \App\Models\PaymentMethod\PaymentMethod $PaymentMethod
     * @param string               $status
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function mark(PaymentMethod $PaymentMethod, $status)
    {
        $PaymentMethod->status = $status;

        if ($PaymentMethod->save()) {
            return true;
        }

        throw new GeneralException("PaymentMethod not updated");
    }

    /*
     * Upload logo image
     */
    public function uploadIcon($icon)
    {
        $path = $this->site_logo_path;
        $image_name = time() . $icon->getClientOriginalName();
        $icon->move(public_path('img'), $image_name);
        // $this->storage->put($path . $image_name, file_get_contents($icon->getRealPath()));
        return $image_name;
    }

    /*
     * remove logo or favicon icon
     */
    public function removeIcon($icon)
    {
        $path = $this->site_logo_path;
        if ($this->storage->exists($path . $icon)) {
            $this->storage->delete($path . $icon);
        }
    }
}
