@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header text-light bg-dark">Le tue informazioni personali</div>

                <div class="card-body text-light bg-dark">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome e cognome</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  class="form-control" name="name" required autofocus value="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="e-mail" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="e-mai" type="text" class="form-control" name="e-mail" required autofocus value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="età" class="col-md-4 col-form-label text-md-right">Età</label>

                            <div class="col-md-6">
                                <input id="età" type="number" class="form-control" name="età" required autofocus value="{{ Auth::user()->PersonalInfo->età }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>

                            <div class="col-md-6">
                                <input id="peso" type="number" class="form-control" name="peso"  required value="{{ Auth::user()->PersonalInfo->peso }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="altezza" class="col-md-4 col-form-label text-md-right">Altezza</label>

                            <div class="col-md-6">
                                <input id="altezza" type="number" class="form-control" name="altezza" required value="{{ Auth::user()->PersonalInfo->altezza }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="circonferenza" class="col-md-4 col-form-label text-md-right">Circonferenza</label>

                            <div class="col-md-6">
                                <input id="circonferenza" type="number" class="form-control" name="circonferenza" required value="{{ Auth::user()->PersonalInfo->circ_vita }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sport" class="col-md-4 col-form-label text-md-right">Sport praticati</label>

                            <div class="col-md-6">
                                <input id="sport" type="text" class="form-control" name="sport" required  autofocus value="{{ Auth::user()->PersonalInfo->sport_praticati }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inattivo" class="col-md-4 col-form-label text-md-right">Inattivo da</label>

                            <div class="col-md-6">
                                <input id="inattivo" type="number" class="form-control" name="inattivo" required value="{{ Auth::user()->PersonalInfo->inattivo_da }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="giorni" class="col-md-4 col-form-label text-md-right">Giorni per allenarti</label>

                            <div class="col-md-6">
                                <input id="giorni" type="number" class="form-control" name="giorni" required value="{{ Auth::user()->PersonalInfo->giorni_disponibili }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <form action="/user/info/edit">
                                    <button type="submit" class="btn btn-primary border-0" style="background-color: #f39c12;">
                                        Modifica
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
