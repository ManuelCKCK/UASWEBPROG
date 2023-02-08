@extends('navbar')
@include('navbaruser')


@section('title','profileuser')

@foreach ($profile as $acc)
<center>

<div class="card m-4" style="width: 250px;" style="height: 250px;" style="border-radius: 50%;">
        <div class="card-body">
        <p class="card-text">First Name : {{$acc->first_name}}</p>
        <p class="card-text">Last Name : {{$acc->last_name}}</p>
        <p class="card-text text-success">Email : {{$acc->email}}</p>
        @if ($acc->gender_id == 1)
            <p>Gender : Male</p>
        @else
            <p>Gender : Female</p>
        @endif
        <img src="{{$acc->display_picture_link}}" alt="">
        
</div>   
</center>       
@endforeach

@include('footer')