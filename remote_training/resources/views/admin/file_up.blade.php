@extends('layouts.admin')
@section('content')
<style>
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      }
</style>
<form method="POST" enctype="multipart/form-data" class="col-md-6 centered"> @csrf
    <div class="custom-file">
        <input type="file" name="protocollo" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Scegli file</label>
        <button type="submit" class="btn btn-hero btn-dark">Carica protocollo</button>
    </div>
</form>
@endsection