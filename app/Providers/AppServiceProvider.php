<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Product_Type;

// use App\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('menu',function($view)
        {
            // if(Session('cart'))
            // {
            //     $oldcart=Session::get('cart');//lấy giỏ hàng hiện tại gán vào giỏ hàng cũ
            //     $cart=new Cart($oldcart);

            // }
            $loai_sach=Product_Type::all();
            $view->with('loai_sach',$loai_sach);
            // ,$loai_sach,'cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
