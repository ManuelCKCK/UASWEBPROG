<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // public function buy($id){
    //     $accdata = DB::table('orders')->insert([
    //         'account_id' => '1',
    //         'item_id' => '1',
    //         'price' =>'1000'
    //     ]);
    //     return view('/cart');
        
        
        
    // }

        

     public function buyview($account_id){
        //  $buydata = DB::table('orders')->join('items','items.order_id','=','orders.order_id')->get();
        //  return view('cart', compact('buydata'));
        $items = DB::table('orders')->join('accounts','accounts.account_id','=','orders.account_id')
        ->join('items','items.item_id','=','orders.item_id')->where('accounts.account_id','=',1)->get();
        return view('cart', compact('items'));
        }
        public function buyviewadmin($account_id){
         //  $buydata = DB::table('orders')->join('items','items.order_id','=','orders.order_id')->get();
         //  return view('cart', compact('buydata'));
         $items = DB::table('orders')->join('accounts','accounts.account_id','=','orders.account_id')
         ->join('items','items.item_id','=','orders.item_id')->where('accounts.account_id','=',2)->get();
         return view('admincart', compact('items'));
         }

     public function deleteitem($order_id){
        DB::table('orders')->where('order_id','=',$order_id)->delete();
        return redirect()->back();
     }   
     public function viewcheckout(){
        return view('checkout');
     }
     public function viewcheckoutadmin(){
      return view('checkoutadmin');
   }
}
