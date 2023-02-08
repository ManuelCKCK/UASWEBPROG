@extends('navbar')
@include('barbar')


@section('title','register')

<div style="padding-bottom: 150px; color:black">
    <h1 class="d-flex flex-column align-items-center pt-4" style="margin-left: -150pt">Register</h1>
    <div class="d-flex flex-column align-items-center mt-4">
        <form action="{{ route('user') }}" method="POST"  class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            <div class="mb-2 w-80">
                <label for="FirstName" class="form-label">First Name: </label>
                <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-2 w-80">
                <label for="lastName" class="form-label">Last Name: </label>
                <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="exampleInputPassword1">
            </div>
            <div class="mb-3 w-100">
                <label for="Password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <div class="mb-3 w-100">
                <label for="role" class="form-label">Gender</label>
                <select name="gender" id="gender">
                <option value="1">male</option>
                <option value="2">female</option>
                </select>
            </div>
             <div class="mb-3 w-100">
                <label for="role" class="form-label">Role</label>
                <select name="roles" id="Role">
                <option value="1">user</option>
                <option value="2">admin</option>
                </select>
            </div>
             <div class="mb-3">
                <label for="inputImage" class="form-label">Display Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div> 
            <button type="submit" class="btn" style="background-color: rgb(228, 231, 58)">Submit</button>
        </form>
    </div>
</div>

@include('footer')