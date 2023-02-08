@extends('navbar')
@include('navbaradmin')


@section('title','accmain')

@foreach ($profile as $acc)
<center>

<div class="card m-4" style="width: 250px;" style="height: 150px;" style="border-radius: 50%;">
        <div class="card-body">
        <p class="card-text">First Name : {{$acc->first_name}}</p>
        @if ($acc->role_id == 1)
        <p>Role : User</p>
    @else
        <p>Role : Admin</p>
    @endif
        <img src="{{$acc->display_picture_link}}" alt="">
        <a href="" style="margin-right: 10pt">Update Role</a>
        <a href="/deleteacc/{{$acc->account_id}}">Delete</a>
</div>  
</div> 
</center>       
@endforeach


@include('footer')