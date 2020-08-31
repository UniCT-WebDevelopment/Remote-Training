<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    public function index()
    {
        return  view('admin.index');
    }

    public function list()
    {
        return  view('admin.list');
    }

    public function file_up($id){
        return view('admin.file_up');
    }

    public function show($id){
        //
        $user = \App\User::find($id);
        return view('admin.show', compact('user'));
    }

    public function upload(Request $request, $id){
        if($request->protocollo){      
            $request->protocollo->storeAs('public\protocol',"$id-protocol.pdf");
            $file = new \App\Protocol();
            $file->nome = "$id-protocol.pdf";
            $file->path = "public/protocol/$id-protocol.pdf";
            $file->ext = $request->protocollo->extension();
            $file->user_id = $id;
            $file->save();
            return redirect('/admin/list');
        }
    }
}
