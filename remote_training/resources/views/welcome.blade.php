@extends('layouts.app')

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
                <h1><span class="text-dark font-weight-bolder">Benvenuto in</span><br>
                    <span class="text-light font-weight-bolder">Remote</span><br>
                    <span class="text-dark font-weight-bolder">Training</span><span class="font-weight-bolder text-light">!</span>
                </h1>
                <form action="/login" style="display: inline;">
                    <button class="btn btn-hero btn-dark">
                        Accedi
                    </button>
                </form>
                <form action="/register" style="display: inline;">
                    <button class="btn btn-hero btn-light">
                        Registrati
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection