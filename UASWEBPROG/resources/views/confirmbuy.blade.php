@extends('navbar')
@include('navbaruser')


@section('title','itemdetail')

<div style="padding-bottom: 150px; color:black">
    <h1 class="d-flex flex-column align-items-center pt-4" style="margin-left: -150pt">Buy</h1>
    <div class="d-flex flex-column align-items-center mt-4">
        <form action="" method="POST"  class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            <div class="mb-2 w-80">
                <label for="email" class="form-label">Confirm Email Address: </label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-2 w-80">
                <label for="email" class="form-label">Vegetable Name: </label>
                <input type="text" class="form-control" name="itemname" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn" style="background-color: rgb(228, 231, 58)">Submit</button>
        </form>
    </div>
</div>

@include('footer')