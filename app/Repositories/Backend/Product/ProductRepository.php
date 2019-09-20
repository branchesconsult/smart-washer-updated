<?php

namespace App\Repositories\Backend\Product;

use DB;
use Carbon\Carbon;
use App\Models\Product\Product;
use App\Models\Product\ProductServiceLocation;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Product::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable($location_id = null)
    {
        
        if($location_id != null){
            return $this->query()
            ->select([
                config('module.products.table') . '.id',
                config('module.products.table') . '.name',
                config('module.products.table') . '.locations',
                config('module.products.table') . '.created_at',
                config('module.products.table') . '.updated_at',
            ])->where('locations', 'LIKE', '%' . $location_id . '%');
        }else{
        return $this->query()
            ->select([
                config('module.products.table') . '.id',
                config('module.products.table') . '.name',
                config('module.products.table') . '.locations',
                config('module.products.table') . '.created_at',
                config('module.products.table') . '.updated_at',
            ]);
        }
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
        $product = self::MODEL;
        $product = new $product();

        if ($product->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.products.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Product $product
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Product $product, array $input)
    {

        if ($product->update(array_except($input, ['service', 'category']))) {
            $input['category'] = !isset($input['category']) ? null : $input['category'];
            $product->find($product->id)
                ->categories()
                ->sync($input['category']);

            $services = [];
            foreach ($input['service'] as $key => $val) {
                foreach($val as $k => $v){
                    $services[$key][$k]['price'] = (double)$v['price'];
                    $services[$key][$k]['discount_price'] = (double)$v['discount_price'];
                    $services[$key][$k]['laundry_price'] = (double)$v['laundry_price'];
                    $services[$key][$k]['location_id'] = $v['location_id'];
                    $ProductServiceLocation = ProductServiceLocation::firstOrCreate(['product_id' => $product->id,'service_id'=>$k,'location_id'=>$v['location_id']]);
                    $ProductServiceLocation->price = (double)$v['price'];
                    $ProductServiceLocation->discount_price = (double)$v['discount_price'];
                    $ProductServiceLocation->laundry_price = (double)$v['laundry_price'];
                    $ProductServiceLocation->save();
                }
            }
            // $product->find($product->id)
            //     ->services()
            //     ->sync($services);
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.products.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Product $product
     * @throws GeneralException
     * @return bool
     */
    public function delete(Product $product)
    {
        if ($product->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.products.delete_error'));
    }
}
