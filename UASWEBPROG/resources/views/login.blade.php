@extends('navbar')
@include('barbar')


@section('title','login')
<div style="padding-bottom: 150px; color:black">
    <h1 class="d-flex flex-column align-items-center pt-4" style="margin-left: -150pt">Login</h1>
    <div class="d-flex flex-column align-items-center mt-4">
        <form action="{{ route('login') }}" method="POST"  class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            <div class="mb-2 w-80">
                <label for="email" class="form-label">Email Address: </label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-2 w-80">
                <label for="email" class="form-label">Password: </label>
                <input type="text" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
            <div class="mb-2 w-80">
                <a href="/register">Dont have account? register now here</a>
            </div>
            <button type="submit" class="btn" style="background-color: rgb(228, 231, 58)">Submit</button>
        </form>
    </div>
</div>
@include('footer')