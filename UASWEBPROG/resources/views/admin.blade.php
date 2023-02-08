@extends('navbar')
@include('navbaradmin')


@section('title','admin')

<style>
.circle {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  position: relative;
  background-color: #84f726;
  margin: 30pt;
}

.whitebackground {
  position: absolute;
  width: 95%;
  height: 95%;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  background-color: #ffffff;
}
.Text{
    font-size: 2ch;
    margin-top: 55pt;
    margin-left: 20pt;
}
</style>
<div class="d-flex flex-wrap justify-content-center">
  @foreach($itemdata as $item)
  <div class="card m-4" style="width: 250px;" style="height: 150px;" style="border-radius: 50%;">
          <div class="card-body">
          <h5 class="card-title">{{$item->item_name}}</h5>
          <img style="width: 150px;" style="height: 150px;" src="https://previews.123rf.com/images/r4yhan/r4yhan2001/r4yhan200100314/138148778-fresh-vegetables-logo-healthy-food-shop-illustration.jpg" alt="" srcset="">
          </div>
          <button type="button" style="background-color: white" class="btn btn-primary">
          <a class="button" href={{route('itemdetailadmin', ['id' => $item->item_id])}}>Detail</a>
          </button>     
  </div>
  
@endforeach
</div>
<div>
    {{$itemdata->links()}}
</div>
@include('footer')