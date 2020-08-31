@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header text-light bg-dark">Le informazioni relative a {{$user->name}}</div>

                <div class="card-body text-light bg-dark">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome e cognome</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  class="form-control" name="name" required autofocus value="{{ $user->name }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="e-mail" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="e-mai" type="text" class="form-control" name="e-mail" required autofocus value="{{ $user->email }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="età" class="col-md-4 col-form-label text-md-right">Età</label>

                            <div class="col-md-6">
                                <input id="età" type="number" class="form-control" name="età" required autofocus value="{{ $user->PersonalInfo->età }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>

                            <div class="col-md-6">
                                <input id="peso" type="number" class="form-control" name="peso"  required value="{{ $user->PersonalInfo->peso }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="altezza" class="col-md-4 col-form-label text-md-right">Altezza</label>

                            <div class="col-md-6">
                                <input id="altezza" type="number" class="form-control" name="altezza" required value="{{ $user->PersonalInfo->altezza }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="circonferenza" class="col-md-4 col-form-label text-md-right">Circonferenza</label>

                            <div class="col-md-6">
                                <input id="circonferenza" type="number" class="form-control" name="circonferenza" required value="{{ $user->PersonalInfo->circ_vita }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sport" class="col-md-4 col-form-label text-md-right">Sport praticati</label>

                            <div class="col-md-6">
                                <input id="sport" type="text" class="form-control" name="sport" required  autofocus value="{{ $user->PersonalInfo->sport_praticati }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inattivo" class="col-md-4 col-form-label text-md-right">Inattivo da</label>

                            <div class="col-md-6">
                                <input id="inattivo" type="number" class="form-control" name="inattivo" required value="{{ $user->PersonalInfo->inattivo_da }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="giorni" class="col-md-4 col-form-label text-md-right">Giorni per allenarti</label>

                            <div class="col-md-6">
                                <input id="giorni" type="number" class="form-control" name="giorni" required value="{{$user->PersonalInfo->giorni_disponibili }}" readonly>
                            </div>
                        </div>

                        
            
                            <div class="card-body text-light bg-dark">
                                
                                    <div class="form-group row">
                                        <label for="problemi" class="col-md-4 col-form-label text-md-right">Problemi articolari</label>
            
                                        <div class="col-md-6">
                                            <input id="problemi" type="text" class="form-control @error('problemi') is-invalid @enderror" name="problemi" required autofocus value="{{ $user->ClinicalInfo->problemi_articolari }}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="patologie" class="col-md-4 col-form-label text-md-right">Patologie cliniche</label>
            
                                        <div class="col-md-6">
                                            <input id="patologie" type="text" class="form-control @error('patologie') is-invalid @enderror" name="patologie" required autofocus value="{{ $user->ClinicalInfo->patologie }}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="interventi" class="col-md-4 col-form-label text-md-right">Interventi chirurgici</label>
            
                                        <div class="col-md-6">
                                            <input id="interventi" type="text" class="form-control @error('interventi') is-invalid @enderror" name="interventi" required autofocus value="{{$user->ClinicalInfo->interventi }}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="fumatore" class="col-md-4 col-form-label text-md-right">Fumatore?</label>
            
                                        <div class="col-md-6">
                                            <input id="fumatore" type="text" class="form-control @error('fumatore') is-invalid @enderror" name="fumatore" required autofocus value="{{ $user->ClinicalInfo->fumatore }}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="dieta" class="col-md-4 col-form-label text-md-right">Segui una dieta?</label>
            
                                        <div class="col-md-6">
                                            <input id="dieta" type="text" class="form-control @error('dieta') is-invalid @enderror" name="dieta" required autofocus value="{{ $user->ClinicalInfo->dieta }}" readonly>
                                        </div>
                                    </div>
                                    
                                
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection