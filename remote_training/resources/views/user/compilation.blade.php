@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Compila il form con le tue informazioni personali</div>

                <div class="card-body">
                    <form method="POST" action="/user/compilation2">
                        @csrf

                        <div class="form-group row">
                            <label for="età" class="col-md-4 col-form-label text-md-right">Età</label>

                            <div class="col-md-6">
                                <input id="età" type="number" class="form-control @error('età') is-invalid @enderror" name="età" required autofocus placeholder="Quanti anni hai?">

                                @error('età')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>

                            <div class="col-md-6">
                                <input id="peso" type="number" class="form-control @error('peso') is-invalid @enderror" name="peso" value="peso" required placeholder="Qual è il tuo peso in Kg?" >

                                @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="altezza" class="col-md-4 col-form-label text-md-right">Altezza</label>

                            <div class="col-md-6">
                                <input id="altezza" type="number" class="form-control @error('altezza') is-invalid @enderror" name="altezza" required placeholder="Qual è la tua altezza in centimetri?">

                                @error('altezza')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="circonferenza" class="col-md-4 col-form-label text-md-right">Circonferenza</label>

                            <div class="col-md-6">
                                <input id="circonferenza" type="number" class="form-control @error('circonferenza') is-invalid @enderror" name="circonferenza" required placeholder="La tua circonferenza della vita in centimetri">

                                @error('circonferenza')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sport" class="col-md-4 col-form-label text-md-right">Sport praticati</label>

                            <div class="col-md-6">
                                <input id="sport" type="text" class="form-control @error('sport') is-invalid @enderror" name="sport" required  autofocus placeholder="Hai praticato sport in passato?">

                                @error('sport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inattivo" class="col-md-4 col-form-label text-md-right">Inattivo da</label>

                            <div class="col-md-6">
                                <input id="inattivo" type="number" class="form-control @error('inattivo') is-invalid @enderror" name="inattivo" required placeholder="Da quanti mesi sei inattivo?">

                                @error('inattivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="giorni" class="col-md-4 col-form-label text-md-right">Giorni per allenarti</label>

                            <div class="col-md-6">
                                <input id="giorni" type="number" class="form-control @error('giorni') is-invalid @enderror" name="giorni" required placeholder="Quanti giorni della settimana puoi allenarti?">

                                @error('giorni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary border-0" style="background-color: #f39c12;">
                                    Invia
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
