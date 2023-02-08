@extends('navbar')
@include('navbaruser')


@section('title','checkout')
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
        margin-top: 25pt;
        margin-left: 50pt;
    }
    .Text1{
        font-size: 2ch;
        margin-top: 10pt;
        margin-left: 15pt;
    }
    .link{
        font-size: 2ch;
        margin-top: 15pt;
        margin-left: 20pt;
    }
    </style>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="circle">
            <div class="whitebackground">
    
                <h1 class="Text" >Success!</h1>
                <h1 class="Text1" >We Will Contact you 1x24hours</h1>
                <a class="link" href="/user/{id}">click here to 'home'</a>
            </div>
          </div>
    </div>
@include('footer')