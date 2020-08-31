<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('user.index');
        }
    }

    public function info()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('user.info');
        }
    }

    public function body()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('user.body');
        }
    }

    public function protocol()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            $id = $user->id;
            $contents = Storage::get("public/protocol/$id-protocol.pdf");
            return view('user.protocol', compact('contents'));
        }
    }

    public function progress()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('user.progress');
        }
    }

    public function compilation()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('error.error403');
        }
    }

    public function compilation2()
    {
        $user = \Auth::user();
        if(!$user->ClinicalInfo){
            return view('user.compilation2');
        }

        else{
            return view('error.error403');
        }
    }

    public function personal_edit()
    {
        $user = \Auth::user();
        if(!$user->PersonalInfo){
            return view('user.compilation');
        }
        
        else{
            return view('user.personal_edit');
        }
    }

    public function clinical_edit()
    {
        $user = \Auth::user();
        if(!$user->ClinicalInfo){
            return view('user.compilation2');
        }
        
        else{
            return view('user.clinical_edit');
        }
    }

    public function store_personal()
    {
        $info = new \App\PersonalInfo();
        $info->età = request('età');
        $info->peso = request('peso');
        $info->altezza = request('altezza');
        $info->circ_vita = request('circonferenza');
        $info->sport_praticati = request('sport');
        $info->inattivo_da = request('inattivo');
        $info->giorni_disponibili = request('giorni');
        $info->user_id = auth()->user()->id;
        $info->save();
        return redirect('/user/compilation2');
    }

    public function store_clinical()
    {
        $info = new \App\ClinicalInfo();
        $info->problemi_articolari = request('problemi');
        $info->patologie = request('patologie');
        $info->interventi = request('interventi');
        $info->fumatore = request('fumatore');
        $info->dieta = request('dieta');
        $info->user_id = auth()->user()->id;
        $info->save();
        return redirect('/user');
    }

    public function store_personal_edit(){
        $info = \Auth::user()->PersonalInfo;
        $user = \Auth::user();
        $user->email = request('email');
        $info->età = request('età');
        $info->peso = request('peso');
        $info->altezza = request('altezza');
        $info->circ_vita = request('circonferenza');
        $info->sport_praticati = request('sport');
        $info->inattivo_da = request('inattivo');
        $info->giorni_disponibili = request('giorni');
        $info->save();
        return redirect('/user/info');
    }

    public function store_clinical_edit(){
        $info = \Auth::user()->ClinicalInfo;
        $info->problemi_articolari = request('problemi');
        $info->patologie = request('patologie');
        $info->interventi = request('interventi');
        $info->fumatore = request('fumatore');
        $info->dieta = request('dieta');
        $info->save();
        return redirect('/user/body');
    }

}
