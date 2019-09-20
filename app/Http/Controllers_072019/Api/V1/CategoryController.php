<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\CategoryResource;
use App\Models\Category\Category;
use App\Repositories\Backend\Category\CategoryRepository;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
/**
 * @resource Product
 *
 * All categoru and product related functions
 */
class CategoryController extends Controller
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the categories with products.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        if(isset($_GET['currency_code'])){
            $local_currency = $_GET['currency_code'];
            $converter = "SAR_".$local_currency;
            $exchange_rate=file_get_contents('https://free.currconv.com/api/v7/convert?q='.$converter.'&compact=ultra&apiKey=8ce8bba7575e8ee6a930');
            $output= json_decode($exchange_rate);
            $exchange_rate = $output->$converter;
        }else{
            $exchange_rate = 0;
        }

        if($exchange_rate > 0){

            if (request()->headers->has('Device-Type') && request()->header('Device-Type') == 'Android') {
                //Send all including 0 price
                $category = Category::with(['products' => function ($q) use ($exchange_rate) {
                    $q->with(['services' => function ($qService) use ($exchange_rate) {
                        $qService->select('id',
                            'name', 'name_ar',
                            \DB::raw("round((price * $exchange_rate),2) as price"),
                            \DB::raw("round((discount_price * $exchange_rate),2) as discount_price"), 'product_id')->where('price', '>', 0);
                    }])->where('is_custom', '0');
                }])
                    ->select('id', 'name', 'name_ar', 'slug', 'picture')
                    ->get();
            } else {
                $category = Category::with(['products' => function ($q) use ($exchange_rate)  {
                    $q->with(['services' => function ($qService) use ($exchange_rate)  {
                        $qService->select('id', 'name', 'name_ar',
                        \DB::raw("round((price * $exchange_rate),2) as price"),
                        \DB::raw("round((discount_price * $exchange_rate),2) as discount_price"))
                        ->where('price', '>', 0);
                    }])->where('is_custom', '0');
                }])
                    ->select('id', 'name', 'name_ar', 'slug', 'picture')
                    ->get();
            }
        }else{
            if (request()->headers->has('Device-Type') && request()->header('Device-Type') == 'Android') {
                //Send all including 0 price
                $category = Category::with(['products' => function ($q) {
                    $q->with(['services' => function ($qService) {
                        $qService->select('id',
                            'name', 'name_ar', 'price', 'discount_price', 'product_id')->where('price', '>', 0);
                    }])->where('is_custom', '0');
                }])
                    ->select('id', 'name', 'name_ar', 'slug', 'picture')
                    ->get();
            } else {
                $category = Category::with(['products' => function ($q) {
                    $q->with(['services' => function ($qService) {
                        $qService->select('id', 'name', 'name_ar', 'price', 'discount_price')
                            ->where('price', '>', 0);
                    }])->where('is_custom', '0');
                }])
                    ->select('id', 'name', 'name_ar', 'slug', 'picture')
                    ->get();
            }
        }
        return new CategoryResource($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function priceList()
    {
        if(isset($_GET['currency_code'])){
            $local_currency = $_GET['currency_code'];
            $converter = "SAR_".$local_currency;
            $exchange_rate=file_get_contents('https://free.currconv.com/api/v7/convert?q='.$converter.'&compact=ultra&apiKey=8ce8bba7575e8ee6a930');
            $output= json_decode($exchange_rate);
            $exchange_rate = $output->$converter;
        }else{
            $exchange_rate = 0;
        }
        if($exchange_rate > 0){
            $category = Category::with(['products' => function ($q) use ($exchange_rate) {
                $q->with(['services' => function ($qService) use ($exchange_rate) {
                    $qService->select('id', 'name', 'name_ar',
                    \DB::raw("round((price * $exchange_rate),2) as price"),
                    \DB::raw("round((discount_price * $exchange_rate),2) as discount_price"))
                    ->where('price', '>', 0);

                }])->where('is_custom', '0');
            }])
                ->select('id', 'name', 'name_ar', 'slug', 'picture')
                ->get();
        }else{
            $category = Category::with(['products' => function ($q) {
                $q->with(['services' => function ($qService) {
                    $qService->select('id', 'name', 'name_ar', 'price', 'discount_price')
                        ->where('price', '>', 0);
                }])->where('is_custom', '0');
            }])
                ->select('id', 'name', 'name_ar', 'slug', 'picture')
                ->get();
        }
        return new CategoryResource($category);
    }
}
