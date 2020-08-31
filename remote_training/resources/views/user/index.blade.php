@extends('layouts.user')

@section('content')
<style>
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Arial, Helvetica, sans-serif;
      font-size: 60px;
      }
  </style>
  <div class="container centered">
      <div class="row">
          <div class="col-lg-5 col-lg-offset-1">
              <div class="cta">
              <h1><span class="text-dark font-weight-bolder">Ciao <span class="text-light font-weight-bolder">{{ Auth::user()->name}}</span></span><br>
                      <span class="text-dark font-weight-bolder">Bentornato</span><br>
                      <span class="text-light font-weight-bolder">in Remote</span><br>
                      <span class="text-dark font-weight-bolder">Training</span><span class="font-weight-bolder text-light">!</span>
                  </h1>
              </div>
          </div>
      </div>
  </div>
@endsection
