<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Paginator::useBootstrap();

class ItemController extends Controller
{
    public function itemview(){
        $itemdata = Item::paginate(10);

        return view('user',compact('itemdata'));
    }
    public function itemviewadmin(){
        $itemdata = Item::paginate(10);

        return view('admin',compact('itemdata'));
    }
    public function itemdetail($id){
        $itemdetail = Item::all()->where('item_id','=',$id);

        return view('itemdetail' , compact('itemdetail'));
    }
    public function itemdetailadmin($id){
        $itemdetail = Item::all()->where('item_id','=',$id);

        return view('itemdetailadmin' , compact('itemdetail'));
    }

    public function buyshow($id){

        return view('confirmbuy');
    }
    // public function buyshowconfirm(Request $request){

    //     $acc = DB::table('accounts')->where('email','LIKE',$request->email);
    //     DB::table('orders')->insert([
    //         'account_id' => $acc->account_id,
    //         'item_id' => $items->item_id,
    //         'price' => $items->price
    //     ]);
    // }

    public function itemacc($id){

        //$accountid = $accid->account_id;
         $item = DB::table('items')->where('item_id','=',$id)->first();
        // $items = DB::table('orders')->join('accounts','accounts.account_id','=','orders.account_id')
        // ->join('items','items.item_id','=','orders.item_id')->where('items.item_id','=',$id)->get();


        DB::table('orders')->insert([
            'account_id' => '1',
            'item_id' => $item->item_id,
            'price' => $item->price
        ]);
        return redirect('/user/{1}');
    }
    public function itemaccadmin($id){

        //$accountid = $accid->account_id;
         $item = DB::table('items')->where('item_id','=',$id)->first();
        // $items = DB::table('orders')->join('accounts','accounts.account_id','=','orders.account_id')
        // ->join('items','items.item_id','=','orders.item_id')->where('items.item_id','=',$id)->get();


        DB::table('orders')->insert([
            'account_id' => '2',
            'item_id' => $item->item_id,
            'price' => $item->price
        ]);
        return redirect('/admin/{2}');
    }
}
