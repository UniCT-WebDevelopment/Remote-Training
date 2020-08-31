@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-light bg-dark">
                <div class="card-header text-light bg-dark">Il tuo protocollo di allenamento</div>
                <!--AGGIUNGERE CONTROLLO DI ESISTENZA DEL FILE PER L'UTENTE-->
                <div class="card-body text-light bg-dark">
                    <iframe src="{{url("Storage/protocol/".Auth::user()->id."-protocol.pdf")}}" style="width:100%; height: 450px;"></iframe>
                </div>
         
            </div>
        </div>
    </div>
</div>
@endsection 
