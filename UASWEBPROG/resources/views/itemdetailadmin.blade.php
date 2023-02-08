@extends('navbar')
@include('navbaradmin')


@section('title','itemdetail')

@foreach ($itemdetail as $detail)
<center>

<div class="card m-4" style="width: 250px;" style="height: 250px;" style="border-radius: 50%;">
        <div class="card-body">
        <h5 class="card-title">{{$detail->item_name}}</h5>
        <p class="card-text">Rp. {{$detail->price}}</p>
        <p class="card-text text-success">{{$detail->item_desc}}</p>
        
        <button type="button" style="background-color: white" class="btn btn-primary">
        <a class="button" href="/itemdetailbuyadmin/{{$detail->item_id}}">Buy</a> 
        </button>  
</div>   
</center>       
@endforeach

@include('footer')