@extends('navbar')
@include('barbar')


@section('title','mainmenu')

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
    <div class="circle">
        <div class="whitebackground">

            <h1 class="Text" >Find and Buy Your Grocery Here!</h1>

        </div>
      </div>
</div>
@include('footer')