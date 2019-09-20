<?php

namespace App\Http\Controllers\Backend\Product;

use App\Models\Product\Product;
use App\Models\Service\Service;
use App\Models\Locations\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Product\ProductRepository;
use App\Http\Requests\Backend\Product\ManageProductRequest;
use App\Http\Requests\Backend\Product\CreateProductRequest;
use App\Http\Requests\Backend\Product\StoreProductRequest;
use App\Http\Requests\Backend\Product\EditProductRequest;
use App\Http\Requests\Backend\Product\UpdateProductRequest;
use App\Http\Requests\Backend\Product\DeleteProductRequest;
use Nestable\Tests\Model\Category;


/**
 * ProductsController
 */
class ProductsController extends Controller
{
    /**
     * variable to store the repository object
     * @var ProductRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ProductRepository $repository ;
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Product\ManageProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageProductRequest $request)

    {
        $locations = Location::all();
        return view('backend.products.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateProductRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateProductRequest $request)
    {
        $locations = Location::all();
        return view('backend.products.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProductRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $input['locations'] = json_encode($input['locations']);
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.products.index')->withFlashSuccess(trans('alerts.backend.products.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Product\Product $product
     * @param  EditProductRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, EditProductRequest $request)
    {
        //\DB::enableQueryLog();
        $productServicesAndCat = Product::where('id', $product->id)->with(['categories' => function ($q) {
            $q->select('category_id');
        }, 'services' => function ($q) {
            $q->select('service_id', 'price', 'discount_price', 'laundry_price','location_id');
        }])->first()->toArray();
        //dd(\DB::getQueryLog());
        //dd($productServicesAndCat);
        $data['product_services'] = array_reduce($productServicesAndCat['services'], function ($result, $item) {
            $result[$item['location_id']][$item['service_id']]['price'] = $item['price'];
            $result[$item['location_id']][$item['service_id']]['discount_price'] = $item['discount_price'];
            $result[$item['location_id']][$item['service_id']]['laundry_price'] = $item['laundry_price'];
            $result[$item['location_id']][$item['service_id']]['location_id'] = $item['location_id'];
            $result[$item['location_id']][$item['service_id']]['service_id'] = $item['service_id'];
            return $result;
        }, array());
        $data['product_categories'] = array_column($productServicesAndCat['categories'], 'category_id');
        $data['categories'] = Category::pluck('name', 'id')->toArray();
        $data['services'] = Service::pluck('name', 'id')->toArray();

        //dd($data['product_services'], $productServicesAndCat,$data['services']);
        $data['product'] = $product;
        $data['product_locations'] = json_decode($product->locations,true);
        //dd($data);
        $locations = Location::all();
        return view('backend.products.edit', $data)->with('locations',$locations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequestNamespace $request
     * @param  App\Models\Product\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $input['locations'] = json_encode($input['locations']);
        $this->repository->update($product, $input);
        //return with successfull message
        return redirect()->back()->withFlashSuccess(trans('alerts.backend.products.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteProductRequestNamespace $request
     * @param  App\Models\Product\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, DeleteProductRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($product);
        //returning with successfull message
        return redirect()->route('admin.products.index')->withFlashSuccess(trans('alerts.backend.products.deleted'));
    }

}
