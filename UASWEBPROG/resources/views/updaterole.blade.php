@extends('navbar')
@include('navbaradmin')


@section('title','update')

{{-- <div style="padding-bottom: 150px; color:black">
    <h1 class="d-flex flex-column align-items-center pt-4" style="margin-left: -150pt">Register</h1>
    <div class="d-flex flex-column align-items-center mt-4">
        <form action="{{ route('user') }}" method="POST"  class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            {{-- @csrf

             <div class="mb-3 w-100">
                <label for="role" class="form-label">Role</label>
                <select name="roles" id="Role">
                <option value="1">user</option>
                <option value="2">admin</option>
                </select>
            </div>
            <button type="submit" class="btn" style="background-color: rgb(228, 231, 58)">Save</button>
        </form>
    </div>
</div> --}} 
@section('content')
    <h1 class="d-flex flex-column align-items-center mt-4">Update Post</h1>
    <div class="d-flex flex-column align-items-center mt-4">
        <form action="/updatePost" method="POST" class="d-flex flex-column align-items-center border border-dark p-5">
            {{-- CSRF --}}
            @csrf
            {{-- METHOD PATCH --}}
            @method('patch')
            <input type="hidden" name="id" value="{{$post->id}}">
            <div class="mb-3 w-100">
                <label for="InputName" class="form-label">Post Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPrice" class="form-label">Text</label>
                <input type="text" class="form-control" name="text" value="{{$post->text}}" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>

@endsection

@include('footer')