@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header text-light bg-dark">Le tue informazione cliniche</div>

                <div class="card-body text-light bg-dark">
                    
                        <div class="form-group row">
                            <label for="problemi" class="col-md-4 col-form-label text-md-right">Problemi articolari</label>

                            <div class="col-md-6">
                                <input id="problemi" type="text" class="form-control @error('problemi') is-invalid @enderror" name="problemi" required autofocus value="{{ Auth::user()->ClinicalInfo->problemi_articolari }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="patologie" class="col-md-4 col-form-label text-md-right">Patologie cliniche</label>

                            <div class="col-md-6">
                                <input id="patologie" type="text" class="form-control @error('patologie') is-invalid @enderror" name="patologie" required autofocus value="{{ Auth::user()->ClinicalInfo->patologie }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interventi" class="col-md-4 col-form-label text-md-right">Interventi chirurgici</label>

                            <div class="col-md-6">
                                <input id="interventi" type="text" class="form-control @error('interventi') is-invalid @enderror" name="interventi" required autofocus value="{{ Auth::user()->ClinicalInfo->interventi }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fumatore" class="col-md-4 col-form-label text-md-right">Fumatore?</label>

                            <div class="col-md-6">
                                <input id="fumatore" type="text" class="form-control @error('fumatore') is-invalid @enderror" name="fumatore" required autofocus value="{{ Auth::user()->ClinicalInfo->fumatore }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dieta" class="col-md-4 col-form-label text-md-right">Segui una dieta?</label>

                            <div class="col-md-6">
                                <input id="dieta" type="text" class="form-control @error('dieta') is-invalid @enderror" name="dieta" required autofocus value="{{ Auth::user()->ClinicalInfo->dieta }}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <form action="/user/body/edit">
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