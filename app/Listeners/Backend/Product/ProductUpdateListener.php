<?php

namespace App\Listeners\Backend\Product;

use App\Events\Backend\Product\ProductUpdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductUpdateListener
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
     * @param  ProductUpdate  $event
     * @return void
     */
    public function handle(ProductUpdate $event)
    {
        //
    }
}
