<?php

namespace App\Http\Controllers\Backend\Product;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Product\ProductRepository;
use App\Http\Requests\Backend\Product\ManageProductRequest;

/**
 * Class ProductsTableController.
 */
class ProductsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var ProductRepository
     */
    protected $product;

    /**
     * contructor to initialize repository object
     * @param ProductRepository $product;
     */
    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    /**
     * This method return the data of the model
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageProductRequest $request)
    {
        $location_id = $request->get('location_id') ? $request->get('location_id') : null;
        return Datatables::of($this->product->getForDataTable($location_id))
            ->escapeColumns(['id'])
            ->addColumn('country', function ($product) {
                $location_ids = implode(',',json_decode($product->locations,true));

                \DB::enableQueryLog();
                $locations = \DB::select(\DB::raw("SELECT GROUP_CONCAT(name) AS countries from locations where id IN ($location_ids)"));
                
                return $locations[0]->countries;
            })
            ->addColumn('created_at', function ($product) {
                return Carbon::parse($product->created_at)->toDateString();
            })
            ->addColumn('actions', function ($product) {
                return $product->action_buttons;
            })
            ->make(true);
    }
}
