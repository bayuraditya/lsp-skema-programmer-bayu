<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

interface Crud{
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update($id,Request $request);
    public function destroy($id);

}

class WargaController extends Controller implements Crud
{   
    var $iteration = 0;
    public function index(){
        $warga = Warga::all();
        return view('warga',compact(['warga']));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        //menginput ke database.
        Warga::create($request->except('_token','submit'));
        return redirect('/warga');
    }
    public function edit($id){
        $warga = Warga::find($id);

        return view('edit',compact(['warga']));
    }
    public function update($id,Request $request){
        $warga = Warga::find($id);
        $warga->update($request->except('_token','submit'));
        return redirect('/warga');
    }
    public function destroy($id){
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');

    }
   
}

