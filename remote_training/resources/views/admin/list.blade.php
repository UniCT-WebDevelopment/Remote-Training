@extends('layouts.admin')

<style>
    button{

    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header text-light bg-dark">Lista atleti</div>
                <ul class="list-group list-group-flush text-light bg-dark">
                    @php
                        $users = App\User::all();
                        foreach ($users as $user) {
                            if($user->hasRole('user')){
                                echo '<li class="list-group-item text-light bg-dark">';
                                echo "$user->name";
                                echo '<form style="display:inline; padding: 5px; float:right;" method="GET" action="/admin/list/';
                                echo "$user->id";
                                echo '/show"><button type="submit" class="btn btn-primary border-0" style="background-color: #f39c12;">Mostra info</button></form>';
                                echo '<form style="display:inline; padding: 5px; float:right;" method="GET" action="/admin/list/';
                                echo "$user->id";
                                echo '/upload"><button type="submit" class="btn btn-primary border-0" style="background-color: #f39c12;">Invia scheda</button></form>';
                                echo '</li>';
                            }
                            
                        }
                    @endphp
                  </ul>
                  
            </div>
        </div>
    </div>
</div>
@endsection
