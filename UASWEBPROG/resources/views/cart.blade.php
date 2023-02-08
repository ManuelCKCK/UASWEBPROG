@extends('navbar')
@include('navbaruser')


@section('title','buyview')

<div class="d-flex flex-wrap justify-content-center">
<style>
        .button{
                margin-top: 20%;
                margin-bottom: 10%;
                text-decoration: none;
                color: black;
        }
</style>
        @foreach ($items as $buy)
        <center>
        
        <div class="card m-4" style="width: 250px;" style="height: 250px;" style="border-radius: 50%;">
                <div class="card-body">
                <h5 class="card-title">{{$buy->item_name}}</h5>
                <p class="card-text">Rp. {{$buy->price}}</p>
                
                <button type="button" style="background-color: white" class="btn btn-primary">
                <a class="button" href="/deleteitem/{{$buy->order_id}}">Delete</a> 
                </button>  
        </div>   
        </center>       
        @endforeach
        <button class="button" type="button" style="background-color: rgb(190, 236, 24)" class="btn btn-primary">
                <a class="button" href="/checkout">Check Out</a> 
                </button>  
      </div>


@include('footer')