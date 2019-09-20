<?php

namespace App\Listeners\Backend\Product;

use App\Events\Backend\Product\ProductCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductCreateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductCreate  $event
     * @return void
     */
    public function handle(ProductCreate $event)
    {
        //
    }
}
