@extends('navbar')
@include('navbaruser')


@section('title','user')

<style>

.Text{
    font-size: 2ch;
    margin-top: 55pt;
    margin-left: 20pt;
}
.button{
  color: blue;
}
</style>
@auth

    <h1>logged in</h1>

@endauth

<div class="d-flex flex-wrap justify-content-center">
  @foreach($itemdata as $item)
  <div class="card m-4" style="width: 250px;" style="height: 150px;" style="border-radius: 50%;">
          <div class="card-body">
          <h5 class="card-title">{{$item->item_name}}</h5>
          <img style="width: 150px;" style="height: 150px;" src="https://previews.123rf.com/images/r4yhan/r4yhan2001/r4yhan200100314/138148778-fresh-vegetables-logo-healthy-food-shop-illustration.jpg" alt="" srcset="">
          </div>
          <button type="button" style="background-color: white" class="btn btn-primary">
          <a class="button" href={{route('itemdetail', ['id' => $item->item_id])}}>Detail</a>
          </button>     
  </div>
  
@endforeach
</div>
<div>
    {{$itemdata->links()}}
</div>
</div>
</div>
@include('footer')